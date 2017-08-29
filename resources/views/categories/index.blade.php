<<<<<<< HEAD
@extends('layouts.admin-main')
=======
@extends('layouts.app')
>>>>>>> ae46ea15f91e3c99abb5f7a12cd0f1068f42970a
@section('title','| All Categories')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                  <tr>
                    <th>{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                  </tr>
                @endforeach
                </tbody>
            </table>
        </div>{{--end of column md-8--}}

        <div class="col-md-3">
            <div class="well">
                {!! Form::open(['route'=>'categories.store','method'=>'POST']) !!}
                    <h2>New Category</h2>
                    {{Form::label('name', 'Name:')}}
                    {!! Form::text('name',null,['class'=>'form-control']) !!}

                    {!! Form::submit('Create New Category',['class'=>'btn btn-warning btn-orange btn-lg form-spacing-top'],['onclick="valid();"']) !!}

                {!! Form::close() !!}
            </div>
        </div>


    </div>
@stop