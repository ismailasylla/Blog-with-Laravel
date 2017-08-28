@extends('layout.main')
@section('title','| Blog')

  @section('content')

      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <h1>All Blogs</h1>
              <hr>
          </div>
      </div>
    @foreach($posts as $post)
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                  <img src="{{asset('images/' . $post->image)}}" height="200" width="500" alt="" class="form-spacing-top">
                  <h2>{{$post->title}}</h2>
                  <h5>Published: {{date('M j, Y', strtotime($post->created_at))}}</h5>
                  <p>{{ substr(strip_tags($post->body),0,250)}}{{strlen(strip_tags($post->body)) > 250 ? '...' : ""}}</p>
                  <a href="{{url('blog/'.$post->slug)}}" class="btn btn-warning btn-orange">Read More</a>

              </div>
          </div>
          <hr>

    @endforeach

      <div class="row">
          <div class="col-md-12">
              <div class="text-center">
                  {{$posts->links()}}
              </div>
          </div>
      </div>

  @endsection