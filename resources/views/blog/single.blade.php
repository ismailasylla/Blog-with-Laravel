@extends('layout.main')
<?php $titleTag = Htmlspecialchars($post->title);?>
@section('title', "| $titleTag")

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <img src="{{asset('images/' . $post->image)}}" height="400" width="800" alt="">
            <h1>{{$post->title}}</h1>
            <p>{!! $post->body !!}</p>
            <b>Posted in: <small class="badge">{{$post->category->name}}</small></b>
        </div>
    </div>

    <div class="row form-spacing-top">
        <div class="col-md-8 col-md-offset-2">
            <hr>
            <h2 class="badge badge-warning btn-orange comment-title"><i class="fa fa-comment" aria-hidden="true"></i> {{$post->comments()->count()}} Comments</h2>
            @foreach($post->comments as $comment)

                <div class="comment well well-lg">
                    <div class="author-info">
                        <img src="{{"https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=mm"}}" alt="" class="author-image">

                        <div class="author-name">
                            <h4>{{$comment->name}}</h4>
                            <p class="author-time">{{date('F nS, Y - G:i' ,strtotime($comment->created_at))}}</p>
                        </div>
                    </div>

                    <div class="comment-content">
                        {{$comment->comment}}
                    </div>

                </div>

            @endforeach

        </div>
    </div>

    <div class="row">
        <div id="comment-form" class="col-md-8 col-md-offset-2 form-spacing-top">

            {{Form::open(['route'=>['comments.store',$post->id], 'method'=>'POST'])}}
            <div class="row">
                <div class="col-md-6">
                    {{Form::label('name','Name:')}}
                    {{Form::text('name',null,['class'=>'form-control'])}}
                </div>

                <div class="col-md-6">
                    {{Form::label('email','Email:')}}
                    {{Form::text('email',null,['class'=>'form-control'])}}
                </div>

                <div class="col-md-12">
                    {{Form::label('comment','Comment:')}}
                    {{Form::textarea('comment',null,['class'=>'form-control','rows'=>'5'])}}

                    {{Form::submit('Add Comment',['class'=>'btn btn-warning btn-block btn-orange form-spacing-top'])}}

                </div>

            </div>
            {{Form::close()}}

        </div>
    </div>

@endsection