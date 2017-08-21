<div class="container-fluid" id="navim">
    <!-- Second navbar for search -->
    <nav class="navbar-fixed-top navbar-inverse">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><i class="fa fa-rss" aria-hidden="true" href="#page-top" style="margin-left: -90px;margin-top: -90px;"><img alt="Brand" src="../images/icon.png" style="width: 50px;float: right;" class="logo"> Emmet Tecnology</i></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-3">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/"><i class="fa fa-home" aria-hidden="true"> Home</i></a></li>
                    <li><a href="/about"><i class="fa fa-map-marker" aria-hidden="true"> About</i></a></li>
                    {{--<li><a href="#">Services</a></li>--}}
                    {{--<li><a href="#">Works</a></li>--}}
                    {{--<li><a href="#">News</a></li>--}}
                    <li><a href="/contact"><i class="fa fa-envelope-o" aria-hidden="true"> Contact</i></a></li>
                    <li>
                        <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3">Search</a>
                    </li>
                </ul>
                <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse3">
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" />
                        </div>
                        <button type="submit" class="btn btn-warning  btn-circle" style="background-color: #f5861a"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </form>
                </div>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav><!-- /.navbar -->
</div><!-- /.container-fluid -->

