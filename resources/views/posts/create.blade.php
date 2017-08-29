@extends('layouts.app')
@section('title','|Create New Post')

@section('stylesheets')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=yyrh41vbl0m8raesho8thrit5lv3gtlh4wxjivsdegss9hw6"></script>
@stop

@section('content')
       <div class="container" style="margin-top: -50px">
           <div class="row">
               <div class="col-md-8 col-md-offset-2">
                   <h1>Create New post</h1>
                   <hr>
                   {!! Form::open(['method'=>'POST','action'=>'postController@store','data-parsley-validate'=>'','files' =>true]) !!}

                   <div class="form-group">

                       {!! Form::label('title','Title:',['class'=> 'form-spacing-top']) !!}
                       {!! Form::text('title', null, ['class'=>'form-control','required'=>'','maxlength'=>'255']) !!}

                       {{Form::label('slug','Slug:',['class'=> 'form-spacing-top'])}}
                       {{Form::text('slug', null, array('class'=>'form-control','required'=>'','minlenght'=>'5','maxlenght'=>'255'))}}

                       {{Form::label('category_id','Category:',['class'=> 'form-spacing-top'])}}
                       <select name="category_id" id="" class="form-control">

                           @foreach($categories as $category)
                               <option value="{{$category->id}}">{{$category->name}}</option>
                           @endforeach

                       </select>

                       {{Form::label('tags','Tags:',['class'=> 'form-spacing-top'])}}

                       <select name="tags" class="form-control select2-multi" multiple="multiple">
                           @foreach($tags as $tag)
                               <option value="{{$tag->id}}">{{$tag->name}}</option>
                           @endforeach
                       </select>

                       {{Form::label('featured_image','Upload Featured Image:')}}
                       {{Form::file('featured_image')}}

                       {!! Form::label('body','Post Body:',['class'=> 'form-spacing-top']) !!}
                       {!! Form::textarea('body', null, ['class'=>'form-control']) !!}

                       {!! Form::submit('Create Post', ['class'=>'btn btn-warning btn-lg btn-block form-spacing-top']) !!}
                   </div>


                   {!! Form::close() !!}
               </div>
           </div>
       </div>
@endsection