@extends('layout.main')
@section('title', '| Home')

@section('content')

        <div class="jumbotron">
           <h1 class="displa">Welcome To My Bolg!</h1>
           <p class="lead">Thank you for visiting.</p>
           <hr class="my-4">
           <p>This is My blog site created with Laravel.</p>
           <p class="lead">
               <a class="btn btn-warning btn-lg btn-orange" href="#" role="button">Popular Post</a>
           </p>
        </div>

        <div class="row">

            <div class="col-md-8">
                @foreach($posts as $post)
                    <div class="post">
                        <h3>{{$post->title}}</h3>
                        <p>{{substr($post->body, 0, 300)}}{{strlen($post->body) >300 ? "..." : ""}}</p>
                        <a href="{{url('blog/'.$post->slug)}}" class="btn btn-warning btn-orange">Read More</a>
                    </div>
                    <hr>
                @endforeach
            </div>
            {{--side bar--}}
            <div class="col-md-3 col-md-offset-1">
                <h2>Side Bar</h2>
            </div>
            {{--end sidebar--}}
        </div>


@endsection
