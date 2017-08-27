<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class pagesController extends Controller
{
    public function getIndex(){
        $posts = Post::orderBy('created_at','desc')->limit(4)->get();
        return view('pages.home')->withPosts($posts);

    }

    public function about(){
        return view('pages.about');
    }

    public function getContact(){
        return view('pages.contact');
    }

    public function postContact(Request $request){
        $this->validate($request,[
//            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required|max:255',

        ]);

            $data = array(
//            'name' => $request->name,
            'email' => $request->email,
            'subject' =>$request->subject,
            'bodyMessage' =>$request->message,

            );

            Mail::send('emails.contact', $data,function($message) use($data){
//                $message->from($data['name']);
                $message->from($data['email']);
                $message->to('syldox@gmail.com');
                $message->subject($data['subject']);

            });

        Session::flash('success','Message sent Successfully');

        return view('pages.contact');
    }
}
