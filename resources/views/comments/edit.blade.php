@extends('layout.main')
@section('title', '| Edit Comment')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Edit Comment</h1>

            {{Form::model($comment ,['route' => ['comments.update', $comment->id], 'method' =>'PUT'])}}

            {{Form::label('name','Name:',['class'=> 'form-spacing-top'  ])}}
            {{Form::text('name',null, ['class'=> 'form-control ', 'disabled' =>''])}}

            {{Form::label('email','Email:',['class'=> 'form-spacing-top'  ])}}
            {{Form::text('name',null, ['class'=> 'form-control ', 'disabled' =>''])}}

            {{Form::label('comment','Comment:',['class'=> 'form-spacing-top'  ])}}
            {{Form::textarea('comment',null, ['class'=> 'form-control form-spacing-top'  ])}}

            {{Form::submit('Update Comment',['class'=>'btn btn-warning  btn-block btn-orange form-spacing-top'])}}



            {{Form::close()}}

        </div>
    </div>

@stop