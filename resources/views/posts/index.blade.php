@extends('layouts.admin-main')

@section('title','| All Posts')

    @section('content')
        <div class="row">
            <div class="col-md-10">
                <h1>All Posts</h1>
            </div>
            <div class="col-md-2">
                <a href="{{route('posts.create')}}" class="btn btn-lg btn-block btn-warning  post-btn btn-orange btn-border btn-create-post">Create New Post</a>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
        </div> <!-- End of the row-->

            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Created At</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                          <tr>
                            <th>{{$post->id}}</th>
                            <td>{{$post->title}}</td>
                            <td>{{substr(strip_tags($post->body), 0,50)}} {{strlen(strip_tags($post->body))> 50 ?"..." : ""}}</td>
                            <td>{{date ('M j, Y', strtotime($post->created_at))}}</td>
                            <td>
                                <a href="{{route('posts.show',$post->id)}}" class="btn btn-default btn-sm btn-border">View</a>
                                <a href="{{route('posts.edit',$post->id)}}" class="btn btn-default btn-sm btn-border">Edit</a>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{--pagination links navigating bwtween pages--}}
                    <div class="text-center">
                        {!! $posts->links() !!}
                    </div>

                </div>
            </div>

    @stop