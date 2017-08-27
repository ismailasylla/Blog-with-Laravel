@extends('layout.main')

@section('title', '|DELETE COMMENT?')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1> DELETE COMMENT ?</h1>

                <p><strong>Name:</strong> {{$comment->name}}</p><br>
                <p><strong>Email:</strong> {{$comment->email}}</p><br>
                <p><strong>Comment:</strong> {{$comment->comment}}</p><br>


            {{Form::open(['route'=>['comments.destroy', $comment->id], 'method' =>'DELETE'])}}

                {{Form::submit('YES DELETE THIS COMMENT', ['class'=>'btn btn-lg btn-block btn-danger form-spacing-top'])}}
            {{Form::close()}}

        </div>
    </div>


    @stop