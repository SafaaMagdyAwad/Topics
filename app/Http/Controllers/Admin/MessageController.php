<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $read=Message::where('isread',1)->get();
        $unread=Message::where('isread',0)->get();
        $messages=['read'=>$read,'unread'=>$unread];
        return view('admin.message.index',compact('messages'));
    }
    public function read(Message $message){
        if($message->isread==0){
            $message->update([
                'isread'=> 1,
            ]);
        }
        return view('admin.message.details',compact('message'));
    }
    public function destroy(Message $message){
        $message->delete();
        return redirect()->back()->with('success',"This Message Was Deleted Successfully !");
    }

}
