{{--========================================================--}}
<nav class="navbar navbar-default" id="navbar">
    <div class="container-fluid">
        <a class="log-brand" href="{{route('frontend.index')}}" style=" color: #fff;margin-left: 16%">Stackio</a>
        <div class="collapse navbar-collapse">
            <form action="{{route('search')}}" method="get">
                <input type="text" name="title" placeholder="Search.." class="search-expanded">
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
                            <img src="{{asset('/img/profile/'.Auth::user()->img )}}"
                                 style="width: 30px;height: 30px; color: #fff;" class="glyphicon glyphicon-user">
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

                    {{--Notification--}}
                    <li>
                        <ul id="nav">
                            <li id="notification_li">
                                @if(count($notification_nav_bars) > 0)
                                <span id="notification_count">{{count($notification_nav_bars)}}</span>
                                @endif
                                <div id="notificationLink">
                                    <i class="fa fa-globe fa-2x notifications-menu "
                                       aria-hidden="true"></i></div>
                                <div id="notificationContainer">
                                    <div id="notificationTitle" style="border: none">Notifications</div>
                                    <div id="notificationsBody" class="notifications">
                                        @if($notification_nav_bars == null)
                                            <h4>null</h4>
                                        @else
                                            @foreach($notification_nav_bars as $notification_nav_bar)
                                                <div class="list-group" onclick="window.location='showrequest';">
                                                    <div class="col-md-12">
                                                        <button type="button" class="list-group-item"
                                                                style="margin-left: -15px;width:348px;border-radius: 0px">
                                                            <div class="col-md-3">
                                                                <img src="{{asset('/img/profile/smilelaugh.jpg')}}"
                                                                     alt="Todd Shelton" class="img-responsive img-circle"
                                                                     style="width: 40px;margin-left: -20px">

                                                            </div>
                                                            <div class="col-md-10" style="margin-left: -48px;">
                                                                <span class="fwb">Savorn Bon</span>
                                                                <span class="ask"> asked to join </span>
                                                                <span class="">Test&nbsp;ITC</span>
                                                                <span>.</span>
                                                                <span><img class="_10cu img _8o _8r img"
                                                                           src="https://static.fpnh1-1.fna.fbcdn.net/rsrc.php/v3/yX/r/eJy9hr6FcSf.png"
                                                                           alt=""></span>
                                                                <span style="color: #90949c;font-size: 12px;">• 2 hours ago </span>
                                                                </span>
                                                            </div>
                                                        </button>

                                                    </div>
                                                </div>
                                                @endforeach
                                        @endif


                                        <div class="list-group" style="cursor: pointer;" onclick="window.location='http://google.com';">
                                            <div class="col-md-12">
                                                <button type="button" class="list-group-item"
                                                        style="margin-left: -15px;width:348px;border-radius: 0px">
                                                    <div class="col-md-3">

                                                        <img src="{{asset('/img/profile/smilelaugh.jpg')}}"
                                                             alt="Todd Shelton" class="img-responsive img-circle"
                                                             style="width: 40px;margin-left: -20px">

                                                    </div>
                                                    <div class="col-md-10" style="margin-left: -48px;">
                                                        <span>
                                                            <span class="fwb">Savorn Bon</span>
                                                            <span class="ask"> asked to join </span>
                                                            <span class="">Test&nbsp;ITC</span>
                                                            <span>.</span>
                                                            <span><img class="_10cu img _8o _8r img"
                                                                       src="https://static.fpnh1-1.fna.fbcdn.net/rsrc.php/v3/yX/r/eJy9hr6FcSf.png"
                                                                       alt=""></span>
                                                            <span style="color: #90949c;font-size: 12px;">• 2 hours ago </span>
                                                        </span>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" style="cursor: pointer;" onclick="window.location='http://google.com';">
                                        <div id="notificationFooter">See All</div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class="container">
</div>
