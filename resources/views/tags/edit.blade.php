@extends('layouts.admin-main')
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