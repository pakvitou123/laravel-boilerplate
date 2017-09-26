@extends('frontend.layouts_new.app')
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
                                        <a class="list-group-item" href="#"><i style="color: #ef6733;" class="fa fa-globe"
                                                                                      aria-hidden="true"></i> Discussion</a>
                                        <a class="list-group-item" href="#">
                                            <i style="color: #ef6733;" class="fa fa-fire" aria-hidden="true"></i> Members
                                        </a>
                                        @if(!Auth::guest())
                                            <a class="list-group-item" href="#">
                                                <i style="color: #ef6733;" class="fa fa-users" aria-hidden="true"></i> Events
                                            </a>
                                            <a class="list-group-item" href="#">
                                                <i style="color: #ef6733;" class="fa fa-lightbulb-o" aria-hidden="true">&nbsp;
                                                </i>Videos
                                            </a>
                                        @endif
                                        <a class="list-group-item" href="#">
                                            <i style="color: #ef6733;" class="fa fa-hand-o-right" aria-hidden="true"></i>
                                            Photos
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <i style="color: #ef6733;" class="fa fa-certificate" aria-hidden="true"></i>
                                            Files
                                        </a>
                                    </div>
                                    {{--@if(!Auth::guest())--}}
                                        {{--<span>@include('frontend.layouts_new.home_page.left-side')</span>--}}
                                    {{--@endif--}}
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
                                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                                data-toggle="dropdown">Joined
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Leave Group</a></li>
                                                        </ul>
                                                    <a href="#">
                                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                                data-toggle="dropdown">Join
                                                        </button>
                                                    </a>


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
            {{--Approve or Decline--}}

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
                        <ul class="user-group">
                            <span>Member of </span>
                            <li class="user-group-name">
                                <a href="#">GIC Promotion 17th</a>
                            </li>
                            <li>
                                <a href="#">2 friends in group</a>
                            </li>
                        </ul>
                        <div class=" btn-approve-decline-block">
                            <a href="#"><button class="btn-approve" ><i class="fa fa-check" aria-hidden="true"></i> Approve</button></a>
                            <a href="#"><button class="btn-decline"><i class="fa fa-times" aria-hidden="true"></i> Decline</button></a>
                            <a href="#"><button class="btn-block"><i class="fa fa-minus-circle" aria-hidden="true"></i>Block</button></a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

@section('script')
    <script type="text/javascript" src="js/jquery.min.1.9.js"></script>
    <script type="text/javascript" >
        $(document).ready(function()
        {
            $("#notificationLink").click(function()
            {
                $("#notificationContainer").fadeToggle(300);
                $("#notification_count").fadeOut("slow");
                return false;
            });

//Document Click hiding the popup
            $(document).click(function()
            {
                $("#notificationContainer").hide();
            });

//Popup on click
            $("#notificationContainer").click(function()
            {
                return false;
            });

        });
    </script>
@endsection