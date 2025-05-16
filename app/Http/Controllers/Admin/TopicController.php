<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Topic;
use App\Traits\Common;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topics=Topic::with('category')->get();
        return view('admin.topic.index',compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.topic.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|integer|exists:categories,id',
        ]);
        $data['views']=0;
        $data['published']=isset($request->published);
        $data['trending']=isset($request->trending);
        $data['image']=$this->upload_file($request->image,'assets/admin/images/topics');
        // dd($data);
        Topic::create($data);
        return redirect()->route('topic.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $topic=Topic::with('category')->findOrFail($id);
        return view('admin.topic.show',compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $topic=Topic::with('category')->findOrFail($id);
        $categories=Category::all();
        return view('admin.topic.edit',compact('categories','topic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Topic $topic)
    {
        // dd($request->all());
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|integer|exists:categories,id',
            'old_image' => 'required|string',
        ]);
        $data['published']=$request->published;
        $data['trending']=$request->trending;
        $data['image']=(isset($request->image)) ? $this->upload_file($request->image,'assets/admin/images/topics'):$request->old_image;
        // dd($data);
        $topic->update($data);
        return redirect()->route('topic.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic)
    {
        $topic->delete();
        return redirect()->back()->with('success',"This Topic Was Deleted Successfully !");
    }
}
