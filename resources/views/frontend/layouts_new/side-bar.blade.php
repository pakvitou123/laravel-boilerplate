{{--<div class="col-md-3 sidebar2 ">--}}
{{--<div class="logo text-center">--}}
{{--<div>--}}
{{--@if(Auth::guest())--}}
{{--<a href="{{route('frontend.auth.register')}}">--}}
{{--<button type="button" class="btn btn-default Add-friend">--}}
{{--<i class="fa fa-rocket" aria-hidden="true"></i> Create Account--}}
{{--</button>--}}
{{--</a>--}}
{{--@else--}}
{{--<a href="{{route('group')}}">--}}
{{--<button type="button" class="btn btn-default Add-friend">--}}
{{--<i class="fa fa-rocket" aria-hidden="true"></i> Create New Group--}}
{{--</button>--}}
{{--</a>--}}

{{--<a href="{{route('question')}}">--}}
{{--<button type="button" class="btn btn-default Add-friend">--}}
{{--<i class="fa fa-rocket" aria-hidden="true"></i> Ask Question--}}
{{--</button>--}}
{{--</a>--}}

{{--@endif--}}

{{--</div>--}}
{{--</div>--}}
{{--<br>--}}
{{--<div class="left-navigation">--}}
{{--<ul class="list">--}}
{{--<span style="padding-left: 40px">CHOOSE A FILTER</span>--}}
{{--<li><i class="fa fa-globe" aria-hidden="true"></i>ALL Thread</li>--}}
{{--<li><i class="fa fa-thumbs-up" aria-hidden="true"></i>Popular This week</li>--}}
{{--@if(!Auth::guest())--}}
{{--<li><a href="{{route('mygroup')}}"><i class="fa fa-users" aria-hidden="true"></i> &nbsp My Group</a>--}}
{{--</li>--}}
{{--<li><a href="{{route('myquestion')}}"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> &nbsp; &nbsp;My--}}
{{--Question</a></li>--}}
{{--@endif--}}

{{--<li><i class="fa fa-hand-o-right" aria-hidden="true"></i>Solved</li>--}}
{{--<li><i class="fa fa-certificate" aria-hidden="true"></i>Unsolved</li>--}}
{{--<li><i class="fa fa-users" aria-hidden="true"></i></i>No Replies Yet</li>--}}
{{--<li><i class="fa fa-bar-chart" aria-hidden="true"></i>Leaderborde</li>--}}
{{--</ul>--}}

{{--</div>--}}
{{--</div>--}}

{{-- ================================================== --}}
<div class="sidebar-bgcolor">
    <div class="sidebar">
        <div class="container">
            <div class="page-header" id="banner" style="border-bottom:0px">
                <div class="row">
                </div>
                <div class="row" style="width: 88%;margin-left: 50px">
                    <p class="menu-label">
                        CHOOSE A FILTER
                    </p>
                    <div class="col-md-3 col-sm-12">
                        <div class="list-group table-of-contents">
                            <a class="list-group-item" href="{{route('frontend.index')}}"><i style="color: #ef6733;" class="fa fa-globe"
                                                                          aria-hidden="true"></i> ALL Thread</a>
                            <a class="list-group-item" href="{{route('popular')}}">
                                <i style="color: #ef6733;" class="fa fa-fire" aria-hidden="true"></i> Popular This week
                            </a>
                            @if(!Auth::guest())
                                <a class="list-group-item" href="{{route('mygroup')}}">
                                    <i style="color: #ef6733;" class="fa fa-users" aria-hidden="true"></i> My groups
                                </a>
                                <a class="list-group-item" href="{{route('myquestion')}}">
                                    <i style="color: #ef6733;" class="fa fa-lightbulb-o" aria-hidden="true">&nbsp;
                                    </i>My questions
                                </a>
                            @endif
                            <a class="list-group-item" href="#indicators">
                                <i style="color: #ef6733;" class="fa fa-hand-o-right" aria-hidden="true"></i> Solved</a>
                            <a class="list-group-item" href="#progress-bars">
                                <i style="color: #ef6733;" class="fa fa-certificate" aria-hidden="true"></i> Unsolved</a>
                            <a class="list-group-item" href="#containers">
                                <i style="color: #ef6733;" class="fa fa-users" aria-hidden="true"></i> No Replies Yet</a>
                            <a class="list-group-item" href="#dialogs">
                                <i style="color: #ef6733;" class="fa">&#xf080;</i> Leaderborde</a>
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

