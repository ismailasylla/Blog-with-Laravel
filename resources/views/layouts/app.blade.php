<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Orange Mali') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <ul class="nav navbar-nav navbar-right" style="margin-bottom: -30px;">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li class="nav-btno"><a href="{{ route('login') }}"><i class="fa fa-sign-in btn  btn-warning btn-orange " aria-hidden="true"> Login</i></a></li>
                        <li class="nav-btno" style="margin-left: -20px ; float: left"><a href="{{ route('register') }}"><i class="fa fa-user-plus btn btn-warning btn-orange" aria-hidden="true" style="margin-right: -100px"> Register</i></a></li>
                    @else
                        <li class="dropdown" style="margin-right: -42px">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

<<<<<<< HEAD
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style="margin-bottom: -30px;">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="nav-btno"><a href="{{ route('login') }}"><i class="fa fa-sign-in btn  btn-warning btn-orange " aria-hidden="true"> Login</i></a></li>
                            <li class="nav-btno" style="margin-left: -20px ; float: left"><a href="{{ route('register') }}"><i class="fa fa-user-plus btn btn-warning btn-orange" aria-hidden="true" style="margin-right: -100px"> Register</i></a></li>
                        @else
                            <li class="dropdown" style="margin-right: -42px">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                    <li><a href="/posts"><i class="fa fa-rss" aria-hidden="true"> Posts</i></a></li>
                                    <li><a href="{{route('categories.index')}}"><i class="fa fa-circle-thin" aria-hidden="true"> Categories</i></a></li>
                                    <li><a href="{{route('tags.index')}}"><i class="fa fa-tags" aria-hidden="true"> Tags</i></a></li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"> Logout</i>
                                        </a>
                                    </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
=======
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                <li><a href="/posts"><i class="fa fa-rss" aria-hidden="true"> Posts</i></a></li>
                                <li><a href="{{route('categories.index')}}"><i class="fa fa-circle-thin" aria-hidden="true"> Categories</i></a></li>
                                <li><a href="{{route('tags.index')}}"><i class="fa fa-tags" aria-hidden="true"> Tags</i></a></li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"> Logout</i>
                                    </a>
                                </li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
>>>>>>> ae46ea15f91e3c99abb5f7a12cd0f1068f42970a
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
