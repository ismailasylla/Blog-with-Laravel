<!DOCTYPE html>
<html lang="en">
    @include('partials._head')
    <body>

        @include('partials._navbar')
        @yield('content')
        <hr>
        @include('partials._footer')
        @include('partials._javascript')

    </body>
</html>


