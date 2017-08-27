<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mews\Purifier\Facades\Purifier;

//use Mews\Purifier\Purifier;


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
        $posts= Post::orderBy('id','desc')->paginate(10);

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
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create')->withCategories($categories)->withTags($tags);
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
            'title'       => 'required|max:255',
            'slug'        => 'required|alpha_dash|min:5|max:255',
            'category_id' =>'required|integer',
            'body'        => 'required'
        ));

        // Store in the data
        $post = new Post;
        $post->title       = $request->title;
        $post->slug        =  $request->slug;
        $post->category_id = $request->category_id;
        $post->body        = Purifier::clean($request->body);

        $post->save();
        $post->tags()->sync($request->tags, false);

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
        $categories = Category::all();


        $tags = Tag::all();
        $tags2 = array();
        foreach($tags as  $tag){
        $tags2[$tag->id]= $tag->name;

        }
        //return the view and pass in the var previously created
        return view('posts.edit')->withPost($post)->withCategories($categories)->withTags($tags2);
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
        $post = Post::find($id);
        if ($request->input('slug' )==$post->slug){
            // validate the data
        $this->validate($request,array(
            'title' => 'required|max:255',
            'category_id' =>'required|integer',
            'body' => 'required'
          ));
        }else{
        $this->validate($request,array(
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id' =>'required|integer',
            'body' => 'required'
        ));

        }

        // save the data to the database
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->category_id = $request->input('category_id');
        $post->slug = $request->input('slug');
        $post->body = Purifier::clean($request->input('body'));

        $post->save();

        if (isset($request->tags)){

            $post->tags()->sync($request->tags);
        }else{
            $post->tags()->sync(array());

        }

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
        $post->tags()->detach();

        //deleting the post form the database
        $post->delete();

        //displaying the confirmation of the deleted post to the user
        Session::flash('success','Post Was Successfully deleted!');

        //redirecting to the index page after deleting the post
        return redirect()->route('posts.index');
    }
}
