@extends('frontend.layouts_new.app')
@section('header')
    <style>
        .blog-content {
            padding-left: 40px;
            /*border-radius: 8px;*/
            border: 1px solid white;
            box-shadow: -1px 10px 2px 1px rgba(0, 0, 0, .4);
            padding-right: 70px;
        }
    </style>
@endsection
@section('content')
    <div class="col-md-12 blog-content">
        <div class="col-md-3" style="margin-left: 3%">
            @include('frontend.layouts_new.side-bar')
        </div>
        <div class="col-md-8" style="margin-top: 0%">
            <div class="col-md-12">
                <div class="row">
                    <div class="main-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="blog-content">
                                        <div class="row">
                                            <div class="container-fluid">
                                                <h1>{{$question->title}}</h1>
                                                <span>PUBLISHED 6 DAYS AGO BY</span>
                                                <span><a href=""> {{$user->first_name.' '.$user->last_name}}</a></span><br><br>
                                                <p>{{$question->description}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="list-group" id="contact-list">
                                                    @foreach($answer as $answers)
                                                        <li class="list-group-item">
                                                            <div class="col-xs-12 col-md-1">
                                                                <img src="{{asset('img/profile/'.$answers->img_user)}}"
                                                                     alt="Todd Shelton" class="img-responsive img-circle"
                                                                     style="width: 50px;height: 50px">
                                                            </div>
                                                            <div class="col-xs-12 col-md-11">
                                                                <a href="" style="color: #00b1b3"><b>{{$answers->name_user}}</b></a><br>
                                                                <p>{{$answers->description}}</p>
                                                                <a href="" style="color: #00b1b3">documentation
                                                                    here.</a><br>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </li>
                                                    @endforeach
                                                        @if(!Auth::guest())
                                                            <li class="list-group-item">
                                                                <div class="col-xs-12 col-md-1">
                                                                    <img src="{{asset('img/profile/'.auth()->user()->img)}}"
                                                                         alt="Todd Shelton" class="img-responsive img-circle"
                                                                         style="width: 50px;height: 50px">
                                                                </div>
                                                                <div class="col-xs-12 col-md-11">
                                                                    {!! Form::open(['url'=>'answer/'.$question->id]) !!}
                                                                    <div class="row">
                                                                        <div class="col-md-8">
                                                                            {{--<textarea class="form-control" rows="7" name="textarea" id="textarea"></textarea>--}}
                                                                            {{Form::textarea('answer',null,array('class'=>'form-control','placeholder'=>'Type Words','required'))}}
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-md-offset-6">
                                                                            {{--<button class="btn btn-primary" >post your apply</button>--}}
                                                                            {{Form::submit('Save',['class'=>'btn btn-default'])}}
                                                                        </div>
                                                                    </div>
                                                                    {!! Form::close() !!}
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </li>
                                                        @else
                                                            <div class="col-xs-12 col-md-11">
                                                                <a href="{{route('frontend.auth.register')}}">create a forum account to participate in this discussion</a>
                                                            </div>
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
    </div>
    <div>
        {{--{{$count_question->count_views}}--}}
    </div>
@endsection