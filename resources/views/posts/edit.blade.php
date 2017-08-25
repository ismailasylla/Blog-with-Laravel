@extends('layout.main')
@section('title','|Edit-Blog-Post')

@section('content')
    <div class="row">
        {!! Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT']) !!}

        <div class="col-md-8">

            {!! Form::label('title','Title:')!!}
            {!! Form::text('title', null,["class"=>'form-control input-lg'])!!}

            {{Form::label('slug', 'Slug:', ['class' => 'form-spacing-top'])}}
            {{Form::text('slug',null,['class'=>'form-control'])}}

            {{Form::label('category_id','Category:', ['class' => 'form-spacing-top'])}}
            <select name="category_id" id="" class="form-control">

                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach

            </select>

            {{Form::label('tags','Tags:',['class'=> 'form-spacing-top'])}}
            {{Form::select('tags[]',$tags ,null,['class'=>'select2-multi form-control input-lg','multiple'=>'multiple'])}}




            {!! Form::label('title','Body:',['class'=>'form-spacing-top'])!!}
            {!! Form::textarea('body', null,['class'=>'form-control input-lg'])!!}

        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt> Created At: </dt>
                    <dd>{{date('M j, Y h:ia',strtotime($post->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{date('M j, Y h:ia',strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!!  Html::linkRoute('posts.show', 'Cancel', array($post->id),array('class'=>'btn btn-danger btn-block')) !!}

                        {{--<a href="#" class="btn btn-primary btn-block">Edit</a>--}}
                    </div>
                    <div class="col-sm-6">
                        {{Form::submit('Save Changes', ['class'=>'btn btn-success btn-block'])}}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>{{--end of the .row form--}}

@endsection

@section('scripts')

    {!! Html::script('js/select2.min.js') !!}

    <script type="javascript">

        {{--$(".select2-multi").select2().val({!! json_encode($post->tags())!!}).trigger('change');--}}
        $(".select2-multi").select2().val({!! json_encode($post->tags()->getRelated()->id )!!}).trigger('change');
    </script>

    @stop
