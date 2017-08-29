<<<<<<< HEAD
@extends('layouts.admin-main')
=======
@extends('layouts.app')
>>>>>>> ae46ea15f91e3c99abb5f7a12cd0f1068f42970a
@section('title','| Edit Tag')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Tags</h1>

            {{Form::model($tag, ['route'=>['tags.update',$tag->id],'method'=>'PUT'])}}
                {{Form::label('name','Tags Name:')}}
                {{Form::text('name',null,['class'=>'form-control'])}}

                {{Form::submit('Save Changes',['class'=>'btn btn-warning btn-orange form-spacing-top'])}}
            {{Form::close() }}

        </div>
    </div>
@stop