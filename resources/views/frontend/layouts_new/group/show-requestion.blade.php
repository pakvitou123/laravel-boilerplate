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
                                    {{$group->name}}
                                </p>
                                <div class="col-md-3 col-sm-12">
                                    <div class="list-group table-of-contents">
                                        <a class="list-group-item" href="{{route('index',[$group->id])}}"><i style="color: #ef6733;"
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
            {{--Approve or Decline--}}

            <div class="profifle-user-join-group" style="padding: 10px; width: 72%">
                @foreach($user_requests as $user_request)
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <img src="{{asset('img/profile/'.$user_request->img)}}"
                                 alt="@default"
                                 class="img-responsive "
                                 style="border: 2px solid #f5f5f5;
                                width: 60px;max-width: 100%;
                                background: #fff!important;
                                margin-top: 25px;margin-left: -15px;">
                        </div>
                        <div class="col-md-9 ">
                            <div class="user-name">
                                <a href="#">{{$user_request->first_name}}{{$user_request->last_name}}</a>
                            </div>
                            <ul class="user-group">
                                <span>Member of </span>
                                <li class="user-group-name">
                                    <a href="#">{{$group->name}}</a>
                                </li>
                                <li>
                                    <a href="#">2 friends in group</a>
                                </li>
                            </ul>
                            <div class=" btn-approve-decline-block">
                                <a href="{{route('approvemember', [$group->id, $user_request->id])}}">
                                    <button class="btn-approve"><i class="fa fa-check" aria-hidden="true"></i> Approve
                                    </button>
                                </a>
                                <a href="{{route('declineMember',[$group->id, $user_request->id] )}}">
                                    <button class="btn-decline"><i class="fa fa-times" aria-hidden="true"></i> Decline
                                    </button>
                                </a>
                                <a href="#">
                                    <button class="btn-block"><i class="fa fa-minus-circle" aria-hidden="true"></i>Block
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>
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
    <script type="text/javascript" src="js/jquery.min.1.9.js"></script>
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