<ul class="dropdown-menu">
    <li class="header">You have 4 messages</li>
    <li>
        <!-- inner menu: contains the actual data -->
        <ul class="menu">
            <li><!-- start message -->
                <a href="#">
                    <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                    </h4>
                    <p>Why not buy a new awesome theme?</p>
                </a>
            </li>
            <!-- end message -->
        </ul>
    </li>
    <li class="footer"><a href="#">See All Messages</a></li>
</ul>
content-sign up-sign in

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('frontend.index')}}">Stack overflow</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="col-md-6 hidden-xs">
                {!! Form::open(['url'=>'/search','class'=>'navbar-form']) !!}
                <div class="col-sm-4">
                    <div class="form-group">
                        {{Form::text('text',null,array('class'=>'form-control','placeholder'=>'Type Words','required'))}}
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="btn-group">
                        {{Form::submit('Search',['class'=>'btn btn-default'])}}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="col-md-3 col-md-offset-1">
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::guest())
                        <li><a href="{{route('frontend.auth.register')}}"><span class="glyphicon glyphicon-user"></span>
                                Sign Up</a></li>
                        <li><a href="{{route('frontend.auth.login')}}"><span class="glyphicon glyphicon-log-in"></span>
                                Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                <img src="{{asset('/img/profile/'.Auth::user()->img )}}"
                                     style="width: 30px;height: 30px;"
                                     class="glyphicon glyphicon-user">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('frontend.auth.logout') }}">
                                        <h4>ចាកចេញ</h4>
                                    </a>

                                </li>
                                <li>
                                    <a href="{{route('profile')}}">
                                        <h4>ផ្លាស់ប្ដូររូបភាព</h4>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</nav>
