@extends('frontend.layouts_new.group.index')

@section('header')
    <style>
        .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
            color: #262626;
            text-decoration: none;
            background-color: #2196F3;
        }
    </style>
    <div>

    </div>
@endsection
@section('side-bar')
    <div class="col-md-3">
        <br>
        <div class="left-navigation">
            {{--<ul class="list-group">--}}
            {{--<a href="#"><h3><span style="padding-left: 40px">{{$group->name}}</span></h3></a>--}}
            {{--<li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i>Discussion</a></li>--}}
            {{--<li><a href="#"><i class="fa fa-users" aria-hidden="true"></i>Members</a></li>--}}

            {{--<li><i class="fa fa-hand-o-right" aria-hidden="true"></i>Solved</li>--}}
            {{--<li><i class="fa fa-certificate" aria-hidden="true"></i>Unsolved</li>--}}
            {{--<li><i class="fa fa-users" aria-hidden="true"></i></i>No Replies Yet</li>--}}
            {{--<li><i class="fa fa-bar-chart" aria-hidden="true"></i>Leaderborde</li>--}}
            {{--</ul>--}}
            <div class="list-group">
                <a href="#"><h3><span style="padding-left: 40px">{{$group->name}}</span></h3></a>
                <a class="list-group-item" href="#buttons"><i style="font-size:16px" class="fa fa-globe" aria-hidden="true">Discussion</i></a>
                <a class="list-group-item" href="#buttons"><i style="font-size:16px" class="fa fa-globe" aria-hidden="true">Members</i></a>
                <a class="list-group-item" href="#buttons"><i style="font-size:16px" class="fa fa-globe" aria-hidden="true">Solved</i></a>
                <a class="list-group-item" href="#buttons"><i style="font-size:16px" class="fa fa-globe" aria-hidden="true">Unsolved</i></a>
                <a class="list-group-item" href="#buttons"><i style="font-size:16px" class="fa fa-globe" aria-hidden="true">No Replies Yet</i></a>
                <a class="list-group-item" href="#buttons"><i style="font-size:16px" class="fa fa-globe" aria-hidden="true">Leaderborde</i></a>
            </div>
        </div>
    </div>

@endsection
@section('content')
    <div class="col-md-9">
        <div class="row">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <img class="img-responsive" style=" height: 300px;width: 100%"
                                         src="{{asset('/img/group/'.$group->img)}}">
                                </div>
                                <div class="panel-footer">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                data-toggle="dropdown">Joined
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Leave Group</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                data-toggle="dropdown">Setting
                                            <span class="caret"></span>
                                        </button>
                                        <a href="{{route('showquestion',[$group->id])}}">
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

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <ul class="list-group" id="contact-list">
                                        <li class="list-group-item">
                                            <div class="col-xs-12 col-md-1">
                                                <img src="http://api.randomuser.me/portraits/men/24.jpg"
                                                     alt="Todd Shelton" class="img-responsive img-circle"
                                                     style="width: 50px;height: 50px">
                                            </div>
                                            <div class="col-xs-12 col-md-10">
                                                <a href="" style="color: black">The cart does not contain rowId
                                                    ce5452f389f041ab17e46324cc050c0d.</a><br>
                                                <span><a href="#" style="color: red">Laravel</a> </span>
                                                <span><a href="#">15 MINUTES AGO</a></span>
                                                <span>By</span>
                                                <span><a href="#"> HELPMYWORLD</a></span>
                                            </div>
                                            <div class="col-xs-12 col-md-1">
                                                <p>09</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="col-xs-12 col-md-1">
                                                <img src="http://api.randomuser.me/portraits/men/24.jpg"
                                                     alt="Todd Shelton" class="img-responsive img-circle"
                                                     style="width: 50px;height: 50px">
                                            </div>
                                            <div class="col-xs-12 col-md-10">
                                                <a href="" style="color: black">The cart does not contain rowId
                                                    ce5452f389f041ab17e46324cc050c0d.</a><br>
                                                <span><a href="#" style="color: red">Laravel</a> </span>
                                                <span><a href="#">15 MINUTES AGO</a></span>
                                                <span>By</span>
                                                <span><a href="#"> HELPMYWORLD</a></span>
                                            </div>
                                            <div class="col-xs-12 col-md-1">
                                                <p>09</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="col-xs-12 col-md-1">
                                                <img src="http://api.randomuser.me/portraits/men/24.jpg"
                                                     alt="Todd Shelton" class="img-responsive img-circle"
                                                     style="width: 50px;height: 50px">
                                            </div>
                                            <div class="col-xs-12 col-md-10">
                                                <a href="" style="color: black">The cart does not contain rowId
                                                    ce5452f389f041ab17e46324cc050c0d.</a><br>
                                                <span><a href="#" style="color: red">Laravel</a> </span>
                                                <span><a href="#">15 MINUTES AGO</a></span>
                                                <span>By</span>
                                                <span><a href="#"> HELPMYWORLD</a></span>
                                            </div>
                                            <div class="col-xs-12 col-md-1">
                                                <p>09</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="col-xs-12 col-md-1">
                                                <img src="http://api.randomuser.me/portraits/men/24.jpg"
                                                     alt="Todd Shelton" class="img-responsive img-circle"
                                                     style="width: 50px;height: 50px">
                                            </div>
                                            <div class="col-xs-12 col-md-10">
                                                <a href="" style="color: black">The cart does not contain rowId
                                                    ce5452f389f041ab17e46324cc050c0d.</a><br>
                                                <span><a href="#" style="color: red">Laravel</a> </span>
                                                <span><a href="#">15 MINUTES AGO</a></span>
                                                <span>By</span>
                                                <span><a href="#"> HELPMYWORLD</a></span>
                                            </div>
                                            <div class="col-xs-12 col-md-1">
                                                <p>09</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="col-xs-12 col-md-1">
                                                <img src="http://api.randomuser.me/portraits/men/24.jpg"
                                                     alt="Todd Shelton" class="img-responsive img-circle"
                                                     style="width: 50px;height: 50px">
                                            </div>
                                            <div class="col-xs-12 col-md-10">
                                                <a href="" style="color: black">The cart does not contain rowId
                                                    ce5452f389f041ab17e46324cc050c0d.</a><br>
                                                <span><a href="#" style="color: red">Laravel</a> </span>
                                                <span><a href="#">15 MINUTES AGO</a></span>
                                                <span>By</span>
                                                <span><a href="#"> HELPMYWORLD</a></span>
                                            </div>
                                            <div class="col-xs-12 col-md-1">
                                                <p>09</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection