@extends('layout.main')
@section('title','|Create New Post')

@section('content')
    <div class="container" style="margin-top: 10px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create New post</h1>
                <hr>
                {!! Form::open(['method'=>'POST','action'=>'postController@store','data-parsley-validate'=>'']) !!}

                        <div class="form-group">

                            {!! Form::label('title','Title:') !!}
                            {!! Form::text('title', null, ['class'=>'form-control','required'=>'','maxlength'=>'255']) !!}

                            {{Form::label('slug','Slug:')}}
                            {{Form::text('slug', null, array('class'=>'form-control','required'=>'','minlenght'=>'5','maxlenght'=>'255'))}}

                            {{Form::label('category_id','Category:')}}
                            <select name="category_id" id="" class="form-control">

                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach

                            </select>

                        </div>

                        <div class="form-group">

                            {!! Form::label('body','Body:') !!}
                            {!! Form::textarea('body', null, ['class'=>'form-control','required'=>'','maxlength'=>'255']) !!}

                        </div>

                        <div class="form-group">

                            {!! Form::submit('Create Post', ['class'=>'btn btn-warning btn-lg btn-block ']) !!}

                        </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection