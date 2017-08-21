@extends('layout.main')
@section('title','|Create New Post')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create New post</h1>
                <hr>
                {!! Form::open(['method'=>'POST','action'=>'postController@store','data-parsley-validate'=>'']) !!}

                        <div class="form-group">

                            {!! Form::label('title','Title:') !!}
                            {!! Form::text('title', null, ['class'=>'form-control','required'=>'','maxlength'=>'255']) !!}

                        </div>

                        <div class="form-group">

                            {!! Form::label('body','Body:') !!}
                            {!! Form::textarea('body', null, ['class'=>'form-control','required'=>'','maxlength'=>'255']) !!}

                        </div>

                        <div class="form-group">

                            {!! Form::submit('Create Post', ['class'=>'btn btn-success btn-lg btn-block']) !!}

                        </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection