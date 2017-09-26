@extends('frontend.layouts_new.group.index')

@section('header')
    <style>
        .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
            color: #262626;
            text-decoration: none;
            background-color: #2196F3;
        }
    </style>
@endsection
@section('content')
    {{--profile-Group--}}
    <div class="col-md-9" style="margin-left: 45px;margin-top: 25px;">
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
                                        @if($usergroup != null)
                                            @if($usergroup->priority == 1)
                                                <button type="button" class="btn btn-default dropdown-toggle"
                                                        data-toggle="dropdown">Joined
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Delete Group</a></li>
                                                </ul>
                                            @else
                                                <button type="button" class="btn btn-default dropdown-toggle"
                                                        data-toggle="dropdown">Joined
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Leave Group</a></li>
                                                </ul>
                                            @endif
                                        @else
                                            <a href="#">
                                                <button type="button" class="btn btn-default dropdown-toggle"
                                                        data-toggle="dropdown">Join
                                                </button>
                                            </a>

                                        @endif

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Questions & Answers--}}

    <div class="panel panel-default">
        <div class="panel-body">
            <ul class="list-group" id="contact-list">
                @foreach($questions as $question)
                    <li class="list-group-item">
                        <div class="col-xs-12 col-md-1">
                            <img src="{{asset('img/profile/'.$question->img_user)}}"
                                 alt="Todd Shelton" class="img-responsive img-circle"
                                 style="width: 50px;height: 50px">
                        </div>
                        <div class="col-xs-12 col-md-10">
                            <a href="" style="color: black">{{$question->title}}</a><br>
                            <span><a href="#" style="color: red">Laravel</a> </span>
                            <span><a href="#">15 MINUTES AGO</a></span>
                            <span>By</span>
                            <span><a href="#"> HELPMYWORLD</a></span>
                        </div>
                        <div class="col-xs-12 col-md-1">
                            <p>{{count(\App\Models\Answer::where('id_question', $question->id)->get())}}
                                answers</p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection

