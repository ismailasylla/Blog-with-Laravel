@extends('layout.main')
@section('title', '| Home')

@section('content')

    <div class="container">
     <div class="row">
       <div class="col-md-12">
           <div class="jumbotron" style="margin-top: 100px">
               <h1 class="display-3">Welcome To My Bolg!</h1>
               <p class="lead">Thank you for visiting.</p>
               <hr class="my-4">
               <p>This is My blog site created with Laravel.</p>
               <p class="lead">
                   <a class="btn btn-warning btn-lg" href="#" role="button"  style="background-color: #f5861a">Popular Post</a>
               </p>
           </div>
       </div>
     </div>{{--end of the .row--}}

        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet aspernatur consequatur corporis delectus ducimus eius error, maiores modi molestias numquam perspiciatis quo rerum sit sunt, suscipit tempora vitae voluptatum!</p>
                    <a href="#" class="btn btn-warning"  style="background-color: #f5861a">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet aspernatur consequatur corporis delectus ducimus eius error, maiores modi molestias numquam perspiciatis quo rerum sit sunt, suscipit tempora vitae voluptatum!</p>
                    <a href="#" class="btn btn-warning"  style="background-color: #f5861a">Read More</a>
                </div>
                <hr>
                <div class="post" id="about">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet aspernatur consequatur corporis delectus ducimus eius error, maiores modi molestias numquam perspiciatis quo rerum sit sunt, suscipit tempora vitae voluptatum!</p>
                    <a href="#" class="btn btn-warning"  style="background-color: #f5861a">Read More</a>
                </div>
            </div>
            {{--side bar--}}
            <div class="col-md-3 col-md-offset-1">
                <h2>Side Bar</h2>
            </div>
            {{--end sidebar--}}
        </div>
    </div>{{--end of the .row--}}







@endsection
