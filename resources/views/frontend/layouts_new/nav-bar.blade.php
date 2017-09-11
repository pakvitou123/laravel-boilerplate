{{--<nav class="navbar navbar-inverse">--}}
{{--<div class="container-fluid">--}}
{{--<div class="navbar-header">--}}
{{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--</button>--}}
{{--<a class="navbar-brand" href="{{route('frontend.index')}}">Stack overflow</a>--}}
{{--</div>--}}
{{--<div class="collapse navbar-collapse" id="myNavbar">--}}
{{--<div class="col-md-6 hidden-xs">--}}
{{--{!! Form::open(['url'=>'/search','class'=>'navbar-form']) !!}--}}
{{--<div class="col-sm-4">--}}
{{--<div class="form-group">--}}
{{--{{Form::text('text',null,array('class'=>'form-control','placeholder'=>'Type Words','required'))}}--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-sm-2">--}}
{{--<div class="btn-group">--}}
{{--{{Form::submit('Search',['class'=>'btn btn-default'])}}--}}
{{--</div>--}}
{{--</div>--}}
{{--{!! Form::close() !!}--}}
{{--</div>--}}
{{--<div class="col-md-3 col-md-offset-1">--}}
{{--<ul class="nav navbar-nav navbar-right">--}}
{{--@if(Auth::guest())--}}
{{--<li><a href="{{route('frontend.auth.register')}}"><span class="glyphicon glyphicon-user"></span>--}}
{{--Sign Up</a></li>--}}
{{--<li><a href="{{route('frontend.auth.login')}}"><span class="glyphicon glyphicon-log-in"></span>--}}
{{--Login</a></li>--}}
{{--@else--}}
{{--<li class="dropdown">--}}
{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"--}}
{{--aria-expanded="false">--}}
{{--<img src="{{asset('/img/profile/'.Auth::user()->img )}}"--}}
{{--style="width: 30px;height: 30px;"--}}
{{--class="glyphicon glyphicon-user">--}}
{{--{{ Auth::user()->name }} <span class="caret"></span>--}}
{{--</a>--}}

{{--<ul class="dropdown-menu" role="menu">--}}
{{--<li>--}}
{{--<a href="{{ route('frontend.auth.logout') }}">--}}
{{--<h4>ចាកចេញ</h4>--}}
{{--</a>--}}

{{--</li>--}}
{{--<li>--}}
{{--<a href="{{route('profile')}}">--}}
{{--<h4>ផ្លាស់ប្ដូររូបភាព</h4>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--@endif--}}

{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</nav>--}}


{{--========================================================--}}

<nav class="navbar navbar-default" id="nav">
    <div class="container-fluid">
        <a class="log-brand" href="{{route('frontend.index')}}" style=" color: #fff;margin-left: 16%">Stackio</a>
        <div class="collapse navbar-collapse">

            <form>
                <input type="text" name="search" placeholder="Search.." class="search-expanded">
                <button type="submit" class="button-search">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right on-hover">
                @if(Auth::guest())
                    <li>
                        <a href="{{route('frontend.auth.register')}}" style=" color: #fff;" id="on-hover1">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>SIGN UP
                        </a>
                    </li>
                    <li>
                        <a href="{{route('frontend.auth.login')}}" style=" color: #fff;" class="on-hover1">
                            <i class="fa fa-sign-in" aria-hidden="true" id="on-hover1"></i>SIGN IN
                        </a>
                    </li>

                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img src="{{asset('/img/profile/'.Auth::user()->img )}}" style="width: 30px;height: 30px; color: #fff;" class="glyphicon glyphicon-user">
                            <span style="color:#fff"> {{ Auth::user()->name }} </span>
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
                    {{--<li><a href="{{route('question')}}" style=" color: #fff;" > Ask question</a></li>--}}
                    {{--<li><a href="{{route('group')}}" style=" color: #fff;" >Create Group </a></li>--}}
                @endif
            </ul>
        </div>
    </div>
</nav>