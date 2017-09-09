{{--<div class="col-md-3 sidebar2 ">--}}
    {{--<div class="logo text-center">--}}
        {{--<div>--}}
                {{--<a href="{{route('showquestion',[$id_group])}}">--}}
                    {{--<button type="button" class="btn btn-default Add-friend">--}}
                        {{--<i class="fa fa-rocket" aria-hidden="true"></i> Ask Question--}}
                    {{--</button>--}}
                {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<br>--}}
    {{--<div class="left-navigation">--}}
        {{--<div class="col-md-3 col-sm-12">--}}
            {{--<div class="list-group table-of-contents">--}}
                {{--<a class="list-group-item active" href="#navbar">CHOOSE A FILTER</a>--}}
                {{--<a class="list-group-item" href="#buttons"><i  style="font-size:16px" class="fa fa-globe" aria-hidden="true">ALL Thread</i></a>--}}
                {{--<a class="list-group-item" href="#typography"><i style="font-size:16px" style="font-size:24px" class="fa fa-fire" aria-hidden="true">Popular This week</i></a>--}}
                {{--@if(!Auth::guest())--}}
                    {{--<a class="list-group-item"  href="{{route('mygroup')}}"><i class="fa fa-users" aria-hidden="true">My Group</i></a>--}}
                    {{--<a class="list-group-item" href="{{route('myquestion')}}"><i class="fa fa-lightbulb-o" aria-hidden="true">&nbsp;My Question</i></a>--}}
                {{--@endif--}}
                {{--<a class="list-group-item" href="#indicators"><i style="font-size:16px" class="fa fa-hand-o-right" aria-hidden="true">Solved</i></a>--}}
                {{--<a class="list-group-item" href="#progress-bars"><i style="font-size:16px" class="fa fa-certificate" aria-hidden="true">Unsolved</i></a>--}}
                {{--<a class="list-group-item" href="#containers"><i style="font-size:16px" class="fa fa-users" aria-hidden="true">No Replies Yet</i></a>--}}
                {{--<a class="list-group-item" href="#dialogs"><i style="font-size:16px" class="fa">&#xf080; Leaderborde</i></a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="sidebar" style="margin-top: 0px">
    <div class="container">
        <div class="page-header" id="banner" style="border-bottom:0px">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="list-group table-of-contents">
                        <a class="list-group-item active" href="#navbar">CHOOSE A FILTER</a>
                        <a class="list-group-item" href="#buttons"><i  style="font-size:16px" class="fa fa-globe" aria-hidden="true">ALL Thread</i></a>
                        <a class="list-group-item" href="#typography"><i style="font-size:16px" style="font-size:24px" class="fa fa-fire" aria-hidden="true">Popular This week</i></a>
                        @if(!Auth::guest())
                            <a class="list-group-item"  href="{{route('mygroup')}}"><i class="fa fa-users" aria-hidden="true">My Group</i></a>
                            <a class="list-group-item" href="{{route('myquestion')}}"><i class="fa fa-lightbulb-o" aria-hidden="true">&nbsp;My Question</i></a>
                        @endif
                        <a class="list-group-item" href="#indicators"><i style="font-size:16px" class="fa fa-hand-o-right" aria-hidden="true">Solved</i></a>
                        <a class="list-group-item" href="#progress-bars"><i style="font-size:16px" class="fa fa-certificate" aria-hidden="true">Unsolved</i></a>
                        <a class="list-group-item" href="#containers"><i style="font-size:16px" class="fa fa-users" aria-hidden="true">No Replies Yet</i></a>
                        <a class="list-group-item" href="#dialogs"><i style="font-size:16px" class="fa">&#xf080; Leaderborde</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>