<!DOCTYPE html>
<html lang="en">
    @include('partials._head')
    <body id="page-top">

        @include('partials._navbar')
        @include('partials._messages')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>

        {{--@include('partials._footer')--}}
        @include('partials._javascript')

    </body>
</html>


