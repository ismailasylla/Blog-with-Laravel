@extends('layout.main')
@section('title', "| $post->title")

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{$post->title}}</h1>
            <p>{{$post->body}}</p>
            <hr>
            <b>Posted in: <small class="badge">{{$post->category->name}}</small></b>
        </div>

    </div>

@endsection