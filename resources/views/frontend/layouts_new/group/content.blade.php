@extends('frontend.layouts_new.group.index')
{{--@section('header')--}}
{{--<style>--}}
{{--.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {--}}
{{--color: #262626;--}}
{{--text-decoration: none;--}}
{{--background-color: #2196F3;--}}
{{--}--}}
{{--</style>--}}
{{--@endsection--}}
@section('content')
    {{--<div class="col-md-9">--}}
    {{--<div class="col-md-9" style="margin-left: 45px;margin-top: 25px;">--}}
    {{--<div class="row">--}}
    {{--<div class="main-content">--}}
    {{--<div class="container-fluid">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-12">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-body">--}}
    {{--<img class="img-responsive" style=" height: 300px;width: 100%"--}}
    {{--src="{{asset('/img/group/'.$group->img)}}">--}}
    {{--</div>--}}
    {{--<div class="panel-footer">--}}
    {{--<div class="btn-group">--}}
    {{--@if($usergroup != null)--}}
    {{--@if($usergroup->priority == 1)--}}
    {{--<button type="button" class="btn btn-default dropdown-toggle"--}}
    {{--data-toggle="dropdown">Joined--}}
    {{--<span class="caret"></span>--}}
    {{--</button>--}}
    {{--<ul class="dropdown-menu" role="menu">--}}
    {{--<li><a href="#">Delete Group</a></li>--}}
    {{--</ul>--}}
    {{--@else--}}
    {{--<button type="button" class="btn btn-default dropdown-toggle"--}}
    {{--data-toggle="dropdown">Joined--}}
    {{--<span class="caret"></span>--}}
    {{--</button>--}}
    {{--<ul class="dropdown-menu" role="menu">--}}
    {{--<li><a href="#">Leave Group</a></li>--}}
    {{--</ul>--}}
    {{--@endif--}}
    {{--@else--}}
    {{--<a href="#">--}}
    {{--<button type="button" class="btn btn-default dropdown-toggle"--}}
    {{--data-toggle="dropdown">Join--}}
    {{--</button>--}}
    {{--</a>--}}

    {{--@endif--}}

    {{--</div>--}}
    {{--<div class="btn-group">--}}
    {{--<button type="button" class="btn btn-default dropdown-toggle"--}}
    {{--data-toggle="dropdown">Setting--}}
    {{--<span class="caret"></span>--}}
    {{--</button>--}}
    {{--<a href="{{route('showquestion',[$group->id])}}">--}}
    {{--<button type="button" class="btn btn-default Add-friend">--}}
    {{--<i class="fa fa-rocket" aria-hidden="true">Ask Question</i>--}}
    {{--</button>--}}
    {{--</a>--}}
    {{--<ul class="dropdown-menu" role="menu">--}}
    {{--<li><a href="#">Add Member</a></li>--}}
    {{--<li><a href="#">Change Profile Group</a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <div class="col-md-12">
        <div class="col-md-3">
            <div class="sidebar-bgcolor" style="height: 900px">
                {{--Side-bar--}}
                <div class="sidebar">
                    <div class="container">
                        <div class="page-header" id="banner" style="border-bottom:0px">
                            <div class="row">
                            </div>
                            <div class="row" style="width: 88%;margin-left: 50px">
                                <p class="menu-label">
                                    {{$group->name}}
                                </p>
                                <div class="col-md-3 col-sm-12">
                                    <div class="list-group table-of-contents">
                                        <a class="list-group-item active" href="{{route('index',[$group->id])}}"><i style="color: #ef6733;"
                                                                               class="fa fa-globe"
                                                                               aria-hidden="true"></i> Discussion</a>
                                        <a class="list-group-item" href="{{route('listMembers', $group->id) }}">
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
        {{--Backgroup profile--}}
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
                                                @if($usergroup != null)
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

                                                    @if($usergroup->priority == 1)
                                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                                data-toggle="dropdown">Joined
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="{{route('deletegroup', [$group->id])}}">Delete Group</a></li>
                                                        </ul>
                                                        <button type="button" class="btn btn-default Add-friend"
                                                                data-toggle="modal" data-target="#myModal" style="background-color: #00acd6"><i class="fa fa-plus" aria-hidden="true" ></i> Add Member
                                                        </button>
                                                    @else
                                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                                data-toggle="dropdown">Joined
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="{{route('leaveGroup', [$group->id])}}">Leave Group</a></li>
                                                        </ul>
                                                    @endif
                                                @else
                                                    @if($notification != null)
                                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                                data-toggle="dropdown">Pandding
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="{{route('destroynotification', [$group->id])}}">Cancel Request</a></li>
                                                        </ul>
                                                    @else
                                                        <a href="#">
                                                            <button type="button" class="btn btn-default dropdown-toggle"
                                                                    data-toggle="dropdown" onclick="window.location='{{route('createnotification',[$group->id])}}';">Join
                                                            </button>
                                                        </a>
                                                    @endif
                                                @endif

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--Discussion--}}
            <div class="profifle-user-join-group" style="padding: 10px; width: 72%">
                <div class="col-md-12">
                    @foreach($questions as $question)
                            <div class="col-md-3">
                                <img src="{{asset('img/profile/'.$question->img_user)}}"
                                     alt="Todd Shelton" class="img-responsive img-circle"
                                     style="width: 50px;height: 50px">
                            </div>
                            <div class="col-md-9" style="margin-left: 60px;margin-top: -50px;">
                                <a href="{{route('viewquestion', [$group->id, $question->id])}}" style="color: black">{{$question->title}}</a><br>
                                <span><a href="#" style="color: red">Laravel</a> </span>
                                <span><a href="#">15 MINUTES AGO</a></span>
                                <span>By</span>
                                <span><a href="#"> HELPMYWORLD</a></span>
                            </div>
                            <p class="text-muted" style="margin-left: 540px;margin-top: 5px;font-size: 18px;font-weight: 400">{{count(\App\Models\Answer::where('id_question', $question->id)->get())}}
                                &nbsp;answers</p>
                            <br>
                            <br>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    {{--Questions & Answers--}}

    {{--Modal--}}
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                {{ Form::open(['route' => 'addmember', 'class' => 'form-horizontal']) }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Invite Someone</h4>
                </div>
                <div class="modal-body">
                    {{ Form::hidden('id_group', $group->id,['class' => 'form-control',  'required' => 'required', 'autofocus' => 'autofocus']) }}
                    <select class="js-example-templating" name="id_user" style="width: 100%">
                        @foreach($users as $user)
                            <option data-image="{{ $user->img }}" value="{{$user->id}}">{{$user->first_name}}{{$user->last_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {{ Form::submit(trans('validation.attributes.frontend.add'), ['class' => 'btn btn-primary']) }}
                </div>
                {{ Form::close() }}
            </div>

        </div>
    </div>




@endsection

@section('script')
    <script type="text/javascript">
        $('select').select2();
        $(document).ready(function() {
            function formatState (state) {
                console.log(state);
                if (!state.id) {
                    return state.text;
                }
                var baseUrl = "{{asset('img/profile')}}";
                var $state = $(
                    '<span><img style="width: 30px; height: 30px;" src="' + baseUrl + '/' + $(state.element).attr('data-image') + '" class="img-flag" /> ' + state.text + '</span>'
                );
                return $state;
            };

            $(".js-example-templating").select2({
                templateResult: formatState
            });
        });
    </script>
@endsection