@extends('layout.main')
@section('title', "|$tag->name Tag")

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{$tag->name}} Tag <small class="badge">{{$tag->Posts()->count()}} Posts</small></h1>
            <hr>
        </div>

        {{--<div class="col-md-2 col-md-offset-2">--}}
            {{--<a href="{{route('tags.edit', $tag->id)}}" class="btn btn-warning  pull-right btn-block" style="margin-top: 20px">Edit</a>--}}
        {{--</div>--}}
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Tags</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($tag->posts as $post)
                        <tr>
                            <th>{{$post->id}}</th>
                            <td>{{$post->title}}</td>
                            <td>
                                @foreach($post->tags as $tag)
                                    <span class="badge">{{$tag->name}}</span>

                                @endforeach
                            </td>

                            <td>
                                <a href="{{route('posts.show', $post->id)}}" class="btn btn-default btn-small btn-border">View</a>
                                <a href="{{route('tags.edit', $tag->id)}}" class="btn btn-default btn-small btn-border" >Edit</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>


@endsection