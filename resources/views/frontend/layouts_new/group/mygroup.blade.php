@extends('frontend.layouts_new.app')

@section('content')
    <div class="col-md-12">
        <div class="col-md-3" style="margin-left: 0%">
            @include('frontend.layouts_new.side-bar')
        </div>
        <div class="col-md-8" style="margin-top: 2%;margin-left: 40px;">
            <div class="col-md-12">
                <div class="row">
                    <div class="main-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class = "panel panel-primary">
                                        <div class = "panel-heading">
                                            My Group
                                        </div>

                                        <div class = "panel-body">
                                            <ul class="list-group" id="contact-list">
                                                @if(count($results) > 0)
                                                    @foreach($results as $result)
                                                        <li class="list-group-item">
                                                            <div class="col-xs-12 col-md-2">
                                                                <img src="{{asset('/img/group/'.$result->img )}}" alt="Todd Shelton" class="img-responsive img-circle" style="width: 50px;height: 50px">
                                                            </div>
                                                            <div class="col-xs-12 col-md-8">
                                                                <a href="{{route('index',[$result->id])}}" style="color: black"><h4>{{$result->name}}</h4></a>
                                                            </div>
                                                            <div class="col-xs-12 col-md-2">
                                                                <p>09 member</p>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <h5>No have group</h5>
                                                @endif

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
    </div>

@endsection