@extends('layout.main')
<?php $titleTag = Htmlspecialchars($post->title);?>
@section('title', "| $titleTag")

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{$post->title}}</h1>
            <p>{{$post->body}}</p>
            <hr>
            <b>Posted in: <small class="badge">{{$post->category->name}}</small></b>
        </div>
    </div>


    <div class="row form-spacing-top">
        <div class="col-md-8 col-md-offset-2">
            @foreach($post->comments as $comment)
                <div class="comment">
                    <p> <strong>Name:</strong> {{$comment->comment}}</p>
                    <p> <strong>Comment:</strong> <br>{{$comment->comment}}</p><br>
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