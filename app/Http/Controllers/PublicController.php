<?php

namespace App\Http\Controllers;

use App\Jobs\MessageMailJob;
use App\Models\Category;
use App\Models\Message;
use App\Models\Subscripe;
use App\Models\Testimonial;
use App\Models\Topic;
use Illuminate\Http\Request;


class PublicController extends Controller
{
    public function index(){
        $topics=Topic::with('category')->where('published',1)->take(2)->latest()->get();
        $categories = Category::with(['topics' => function ($query) {
            $query->where('published', 1)->latest()->take(3);
        }])->take(5)->get();
        $testimonials=Testimonial::where('published',1)->get();
        return view('public.index',compact('topics','categories','testimonials'));
    }
    public function testimonials(){
        $testimonials=Testimonial::where('published',1)->get();
        return view('public.testimonials',compact('testimonials'));
    }
    public function topicslisting(){
        $popular=Topic::with('category')->where('published',1)->orderBy('views', 'desc')->simplePaginate(3);
        $trending=Topic::with('category')->where('published',1)->where('trending',1)->latest()->take(2)->get();
        // dd($trending);
        return view('public.topics-listing',compact('popular','trending'));
    }
    public function topicsDetail(String $id)
    {
        $topic = Topic::with('category')->where('published', 1)->findOrFail($id);
        return view('public.topics-detail', compact('topic'));
    }

    public function contact(){
        return view('public.contact');
    }
    public Function sendContactMessage(Request $request){
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        $data['isread']=0;
        //store in Db
        Message::create($data);
        //send email in job
        // php artisan queue:work
        MessageMailJob::dispatch($data);
        return redirect()->back()->with('success',"Your Message was sent successfully !");
    }
    public function search(Request $request)
    {
        $keyword = $request->keyword;
        // Search for topics based on the category name
        $topics = Topic::whereHas('category', function ($query) use ($keyword) {
            $query->where('category', 'LIKE', '%' . $keyword . '%');
        })->take(2)->get();
        $category=$keyword;
        return view('public.search-results', compact('topics','category'));
    }

    public function readTopic(string $id){

        $topic = Topic::where('published', 1)->findOrFail($id);
        $topic->update([
            'views'=> $topic->views+1,
        ]);
        return redirect()->back();
    }
    public function newsletter(Request $request){
        $data=$request->validate([
            'email'=>'required|email|unique:subscripes,email',
        ]);
        $data['active']=1;
        Subscripe::create($data);
        return redirect()->back();
        //creating command to send emails for active subscripers
        //php artisan make:command NewsLetterCommand
        //php artisan schedule:run
    }


}
