@extends('frontend.layouts_new.group.index')

@section('content')
    <div class="col-md-12">
        <div class="col-md-3" >
            @include('frontend.layouts_new.group.side-bar')
        </div>
        <div class="col-md-9" >
            <div class="question" style="margin-top: -5px;">
                <div class="conversation-list">
                    @if(count($results) > 0)
                        @foreach($results as $result)
                    <div class="conversation-list-avatar col-md-2 ">
                        <div>
                            <img src="{{asset('/img/group-icon/'.$result->img )}}"
                                 alt="Todd Shelton" class="img-responsive img-circle"
                                 style="z-index:1;border-radius:50%;border: 2px solid #fff;width: 70%;max-width: 100%;background: #fff!important;margin-top: 25px;margin-left: -15px">
                        </div>
                    </div>
                    <div class=" col-md-8 ">
                        <h4 >
                            <a class="is-title-group " href="{{route('index',[$result->id])}}">{{$result->name}}</a>
                        </h4>
                        <div class="group-members ">10&nbsp;Members</div>
                    </div>
                    <div class="row">
                        <hr style="border-color:@default;width: 100% ;margin-left: 15px;margin-top: 115px;">
                    </div>
                        @endforeach
                    @else
                        <h5>No have group</h5>
                    @endif
                </div>
            </div> {{--@end .question--}}
        </div>
    </div>
    {{--<div class="col-md-12">--}}
        {{--<div class="col-md-3" style="margin-left: 0%">--}}
            {{--@include('frontend.layouts_new.group.side-bar')--}}
        {{--</div>--}}
        {{--<div class="col-md-8" style="margin-top: 2%;margin-left: 40px;">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="row">--}}
                {{--<div class="main-content">--}}
                {{--<div class="container-fluid">--}}
                {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                {{--<div class = "panel panel-primary">--}}
                {{--<div class = "panel-heading">--}}
                {{--My Group--}}
                {{--</div>--}}

                {{--<div class = "panel-body">--}}
                {{--<ul class="list-group" id="contact-list">--}}
                {{--@if(count($results) > 0)--}}
                {{--@foreach($results as $result)--}}
                {{--<li class="list-group-item">--}}
                {{--<div class="col-xs-12 col-md-2">--}}
                {{--<img src="{{asset('/img/group/'.$result->img )}}" alt="Todd Shelton" class="img-responsive img-circle" style="width: 50px;height: 50px">--}}
                {{--</div>--}}
                {{--<div class="col-xs-12 col-md-8">--}}
                {{--<a href="{{route('index',[$result->id])}}" style="color: black"><h4>{{$result->name}}</h4></a>--}}
                {{--</div>--}}
                {{--<div class="col-xs-12 col-md-2">--}}
                {{--<p>09 member</p>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
                {{--</li>--}}
                {{--@endforeach--}}
                {{--@else--}}
                {{--<h5>No have group</h5>--}}
                {{--@endif--}}

                {{--</ul>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
               {{----}}
    {{--</div>--}}

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