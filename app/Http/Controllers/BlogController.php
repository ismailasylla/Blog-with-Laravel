<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function getIndex(){
//        $posts = Post::paginate(10);

        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('blog.index')->withPosts($posts);


    }

    public function getSingle($slug){
        //fetch from the DB based on slug
        $post =Post::where('slug', '=', $slug)->first();

        //returning the view and passing it in the post object
        return view('blog.single')->withPost($post);
    }


}
