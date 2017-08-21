<!DOCTYPE html>
<html lang="en">
    @include('partials._head')
    <body id="page-top">

        @include('partials._navbar')
        @yield('content')
        {{--@include('partials._footer')--}}
        @include('partials._javascript')

    </body>
</html>


