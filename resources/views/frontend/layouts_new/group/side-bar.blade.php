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
                                <a class="list-group-item" href="#">
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
