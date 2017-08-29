<div class="container-fluid" id="navim">
    <!-- Second navbar for search -->
    <nav class="navbar-fixed-top navbar-inverse navborder">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand logi-home" href="/"><i class="fa fa-home"  aria-hidden="true" href="#page-top" style="margin-left: -90px;margin-top: -90px; color:#f5861a"><img alt="Brand" src="../../images/icon.png" style="width: 50px;float: right;" class="logo"> Orange Mali</i></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-3">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/"><i class="fa fa-home" aria-hidden="true"> Home</i></a></li>
                    <li><a href="/blog"><i class="fa fa-rss" aria-hidden="true"> Blog</i></a></li>
                    <li><a href="/about"><i class="fa fa-map-marker" aria-hidden="true"> About</i></a></li>
                    {{--<li><a href="#">Services</a></li>--}}
                    {{--<li><a href="#">Works</a></li>--}}
                    {{--<li><a href="#">News</a></li>--}}
                    <li><a href="/contact"><i class="fa fa-envelope-o" aria-hidden="true"> Contact</i></a></li>

                    {{--<ul class="nav navbar-nav navbar-right" >--}}
                        {{--<li class="dropdown" style="margin-right: -42px">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"> My Account </i><span class="caret"></span></a>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"> Login</i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"> Sign-UP</i></a></li>--}}
                                {{--<li role="separator" class="divider"></li>--}}
                                {{--<li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"> Logout</i></a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                    <!-- Right Side Of Navbar -->
                    {{--<ul class="nav navbar-nav navbar-right" style="margin-bottom: -30px;">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@if (Auth::guest())--}}
                            {{--<li class="nav-btno"><a href="{{ route('login') }}"><i class="fa fa-sign-in btn  btn-warning btn-orange " aria-hidden="true"> Login</i></a></li>--}}
                            {{--<li class="nav-btno" style="margin-left: -20px ; float: left"><a href="{{ route('register') }}"><i class="fa fa-user-plus btn btn-warning btn-orange" aria-hidden="true" style="margin-right: -100px"> Register</i></a></li>--}}
                        {{--@else--}}
                            {{--<li class="dropdown" style="margin-right: -42px">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li>--}}
                                        {{--<li><a href="/posts"><i class="fa fa-rss" aria-hidden="true"> Posts</i></a></li>--}}
                                        {{--<li><a href="{{route('categories.index')}}"><i class="fa fa-circle-thin" aria-hidden="true"> Categories</i></a></li>--}}
                                        {{--<li><a href="{{route('tags.index')}}"><i class="fa fa-tags" aria-hidden="true"> Tags</i></a></li>--}}
                                    {{--<li role="separator" class="divider"></li>--}}
                                      {{--<li>--}}
                                          {{--<a href="{{ route('logout') }}"--}}
                                             {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"> Logout</i>--}}
                                          {{--</a>--}}
                                      {{--</li>--}}

                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    {{--</ul>--}}
                    <li>
                        <a class="btn btn-default btn-outline btn-circle collapsed  btn-border" style="margin-right: -100px" data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3">Search</a>
                    </li>

                </ul>
                <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse3">

                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" />
                        </div>
                        <button type="submit" class="btn btn-warning  btn-circle" style="background-color: #f5861a;z-index: 2;padding: 4px 10px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </form>
                </div>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav><!-- /.navbar -->
</div><!-- /.container-fluid -->

