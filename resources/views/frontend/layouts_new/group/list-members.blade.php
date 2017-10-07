@extends('frontend.layouts_new.group.index')
@section('content')
    <div class="col-md-12">
        <div class="col-md-3">
            <div class="sidebar-bgcolor" style="height: 900px">
                <div class="sidebar">
                    <div class="container">
                        <div class="page-header" id="banner" style="border-bottom:0px">
                            <div class="row">
                            </div>
                            <div class="row" style="width: 88%;margin-left: 50px">
                                <p class="menu-label">
                                    GIC Promotion 17th
                                </p>
                                <div class="col-md-3 col-sm-12">
                                    <div class="list-group table-of-contents">

                                        <a class="list-group-item" href="#"><i style="color: #ef6733;"
                                                                               class="fa fa-globe"
                                                                               aria-hidden="true"></i> Discussion</a>

                                        <a class="list-group-item clickme" href="#">
                                            <i style="color: #ef6733;" class="fa fa-fire" aria-hidden="true"></i>
                                            Members
                                        </a>
                                        @if(!Auth::guest())
                                            <a class="list-group-item" href="#">
                                                <i style="color: #ef6733;" class="fa fa-users" aria-hidden="true"></i>
                                                Events
                                            </a>
                                            <a class="list-group-item" href="#">
                                                <i style="color: #ef6733;" class="fa fa-lightbulb-o" aria-hidden="true">&nbsp;
                                                </i>Videos
                                            </a>
                                        @endif
                                        <a class="list-group-item" href="#">
                                            <i style="color: #ef6733;" class="fa fa-hand-o-right"
                                               aria-hidden="true"></i>
                                            Photos
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <i style="color: #ef6733;" class="fa fa-certificate" aria-hidden="true"></i>
                                            Files
                                        </a>


                                    </div>
                                    @if(!Auth::guest())
                                        <span>@include('frontend.layouts_new.home_page.left-side')</span>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--===================================================--}}
        <div class="col-md-9">
            <div class="col-md-9" style="margin-left: 45px;margin-top: 25px;">
                <div class="row">
                    <div class="main-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <img class="img-responsive" style=" height: 300px;width: 100%"
                                                 src="{{asset('/img/group/group.jpg')}}">
                                        </div>
                                        <div class="panel-footer">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default dropdown-toggle"
                                                        data-toggle="dropdown">Joined
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Delete Group</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default dropdown-toggle"
                                                        data-toggle="dropdown">Setting
                                                    <span class="caret"></span>
                                                </button>
                                                <a href="#">
                                                    <button type="button" class="btn btn-default Add-friend">
                                                        <i class="fa fa-rocket" aria-hidden="true">Ask Question</i>
                                                    </button>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Add Member</a></li>
                                                    <li><a href="#">Change Profile Group</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--Group's members--}}

            <div class="profifle-user-join-group">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <img src="{{asset('img/profile/khem veasna1.jpg')}}"
                             alt="@default"
                             class="img-responsive "
                             style="border: 2px solid #f5f5f5;
                                width: 60px;max-width: 100%;
                                background: #fff!important;
                                margin-top: 25px;margin-left: -15px;">
                    </div>
                    <div class="col-md-9 ">
                        <div class="user-name">
                            <a href="#">Khem Veasna</a>
                        </div>
                        <div style="position:absolute;margin-left: 50%">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">
                                    <i class="fa fa-cog" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1"
                                    style="margin-left: -40px;font-weight: normal;line-height: 22px;" >
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Make Admin</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Make moderator</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Remove from group</a></li>
                                    {{--<li role="presentation" class="divider"></li>--}}
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mute member</a></li>
                                </ul>
                            </div>
                        </div>
                        <ul class="user-group">
                            <span>Member of </span>
                            <li class="user-group-name">
                                <a href="#">GIC Promotion 17th</a>
                            </li>
                            <li>
                                <a href="#">Added by La Yu on September 8, 2017</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12" >
                    <div class="col-md-3">
                        <img src="{{asset('img/profile/khem veasna1.jpg')}}"
                             alt="@default"
                             class="img-responsive "
                             style="border: 2px solid #f5f5f5;
                                width: 60px;max-width: 100%;
                                background: #fff!important;
                                margin-top: 25px;margin-left: -15px;">
                    </div>
                    <div class="col-md-9 " style="position: relative">
                        <div class="user-name">
                            <a href="#">Khem Veasna</a>
                        </div>
                        <div style="position:absolute;margin-left: 50%">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">
                                    <i class="fa fa-cog" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1"
                                    style="margin-left: -40px;font-weight: normal;line-height: 22px;" >
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Make Admin</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Make moderator</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Remove from group</a></li>
                                    {{--<li role="presentation" class="divider"></li>--}}
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mute member</a></li>
                                </ul>
                            </div>
                        </div>

                        <ul class="user-group">
                            <span>Member of </span>
                            <li class="user-group-name">
                                <a href="#">GIC Promotion 17th</a>
                            </li>
                            <li>
                                <a href="#">Created group on September 8, 2017</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>


@endsection

@section('script')
    <script type="text/javascript">



    </script>
@endsection
