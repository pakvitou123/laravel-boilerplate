@extends('frontend.layouts_new.app')

@section('content')
    <div class="col-md-9">
        <div class="row">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class = "panel panel-primary">
                                <div class = "panel-heading">
                                    My Question
                                </div>

                                <div class = "panel-body">
                                    <ul class="list-group" id="contact-list">
                                        @if(count($questions) > 0)
                                            @foreach($questions as $question)
                                                <li class="list-group-item">
                                                    <div class="col-xs-12 col-md-1">
                                                        <img src="{{asset('/img/profile/'.Auth::user()->img)}}" alt="Todd Shelton" class="img-responsive img-circle" style="width: 50px;height: 50px">
                                                    </div>
                                                    <div class="col-xs-12 col-md-7">
                                                        <a href="{{route('indexquestion',[$question->id])}}" style="color: black"><h4>{{$question->title}}</h4></a>
                                                    </div>
                                                    <div class="col-xs-12 col-md-2">
                                                        <p>09 answer</p>



                                                    </div>
                                                    <div class="col-xs-12 col-md-2">
                                                        <a href="{{route('editquestion', [$question->id])}}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                                                        <a href="{{route('deletequestion', [$question->id])}}"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
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
@endsection