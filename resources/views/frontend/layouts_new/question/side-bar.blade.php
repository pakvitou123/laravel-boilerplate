
{{-- ================================================== --}}
<div class="sidebar-bgcolor">
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
                            <a class="list-group-item" href="#buttons"><i style="color: #ef6733;" class="fa fa-globe"
                                                                          aria-hidden="true"></i> ALL Thread</a>
                            <a class="list-group-item" href="#typography">
                                <i style="color: #ef6733;" class="fa fa-fire" aria-hidden="true"></i> Popular This week
                            </a>
                            @if(!Auth::guest())
                                <a class="list-group-item" href="{{route('mygroup')}}">
                                    <i style="color: #ef6733;" class="fa fa-users" aria-hidden="true"></i> My groups
                                </a>
                                <a class="list-group-item list-group-item-action " href="{{route('myquestion')}}" style="background-color: #f1f1f1">
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
<h1>hello world</h1>

