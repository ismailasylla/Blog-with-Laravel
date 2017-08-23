<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function getIndex(){
        $posts = Post::orderBy('created_at','desc')->limit(4)->get();
        return view('pages.home')->withPosts($posts);

    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }
}
