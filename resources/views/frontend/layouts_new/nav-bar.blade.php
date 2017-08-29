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
                <form class="navbar-form">
                    <div class="input-group" style="width: 400px">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Search</button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::guest())
                        <li><a href="{{route('frontend.auth.register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="{{route('frontend.auth.login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="{{asset('/img/profile/'.Auth::user()->img )}}" style="width: 30px;height: 30px;"
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
                                    <a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal_2">
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