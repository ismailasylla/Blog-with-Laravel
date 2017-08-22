<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create a variable and store all the blog posts n it from the database
        $posts= Post::all();

        // return a view and pass in the above variable
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the data
        $this->validate($request,array(
            'title' => 'required|max:255',
            'body' => 'required'
        ));

        // Store in the data
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        // Setting Session
        Session::flash('success','The blog post was succesfully saved!');


        // Redirecting

        return redirect()->route('posts.show', $post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);

        return view('posts.show')->withPost( $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database and save as var
        $post =Post::find($id);

        //return the view and pass in the var previously created
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate the data
        $this->validate($request,array(
            'title' => 'required|max:255',
            'body' => 'required'
        ));

        // save the data to the database
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();

        // set flash data with success message
        Session::flash('success','Post Was Successfully Saved!');

        // redirect with flash to data posts.show
         return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //finding the post to be deleted by using the correct id number
        $post = Post::find($id);

        //deleting the post form the database
        $post->delete();

        //displaying the confirmation of the deleted post to the user
        Session::flash('success','Post Was Successfully deleted!');

        //redirecting to the index page after deleting the post
        return redirect()->route('posts.index');
    }
}
