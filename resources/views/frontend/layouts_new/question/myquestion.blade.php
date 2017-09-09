@extends('frontend.layouts_new.app')

@section('content')
    <div class="col-md-12">
        <div class="col-md-3" style="margin-left: 3%">
            @include('frontend.layouts_new.side-bar')
        </div>
        <div class="col-md-8" style="margin-top: 2%">
            <div class="col-md-12">
                <div class="row">
                    <div class="main-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            My Question
                                        </div>

                                        <div class="panel-body">
                                            <ul class="list-group" id="contact-list">
                                                @if(count($questions) > 0)
                                                    @foreach($questions as $question)
                                                        <li class="list-group-item">
                                                            <div class="col-xs-12 col-md-1">
                                                                <img src="{{asset('/img/profile/'.$question->img_user)}}"
                                                                     alt="Todd Shelton"
                                                                     class="img-responsive img-circle"
                                                                     style="width: 50px;height: 50px">
                                                            </div>
                                                            <div class="col-xs-12 col-md-7">
                                                                <a href="{{route('indexquestion',[$question->id])}}"
                                                                   style="color: black"><h4>{{$question->title}}</h4>
                                                                </a>
                                                            </div>
                                                            <div class="col-xs-12 col-md-2">
                                                                <p>{{count(\App\Models\Answer::where('id_question', $question->id)->get())}} answer</p>


                                                            </div>
                                                            <div class="col-xs-12 col-md-2">
                                                                <a href="{{route('editquestion', [$question->id])}}"><i
                                                                            class="fa fa-pencil-square-o fa-2x"
                                                                            aria-hidden="true"></i></a>
                                                                <a href="{{route('deletequestion', [$question->id])}}"><i
                                                                            class="fa fa-trash-o fa-2x"
                                                                            aria-hidden="true"></i></a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <h5>No question</h5>
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