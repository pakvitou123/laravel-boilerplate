@extends('frontend.layouts_new.app')
@section('header')
    <style>
        .blog-content{
            padding-left: 40px;
            border-radius:8px;
            border: 1px solid white;
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, .2);
            padding-right: 70px;
        }
    </style>
@endsection
@section('content')
    <div class="col-md-9">
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
                                            <li class="list-group-item">
                                                <div class="col-xs-12 col-md-1">
                                                    <img src="http://api.randomuser.me/portraits/men/24.jpg" alt="Todd Shelton" class="img-responsive img-circle" style="width: 50px;height: 50px">
                                                </div>
                                                <div class="col-xs-12 col-md-11">
                                                    <a href="" style="color: #00b1b3"><b>Dara</b></a><br>
                                                    <p>If you want to skip these tags, try to use <span style="color: red">strip_tags()</span> function. Check further </p>
                                                    <a href="" style="color: #00b1b3">documentation here.</a><br>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="col-xs-12 col-md-1">
                                                    <img src="http://api.randomuser.me/portraits/men/24.jpg" alt="Todd Shelton" class="img-responsive img-circle" style="width: 50px;height: 50px">
                                                </div>
                                                <div class="col-xs-12 col-md-11">
                                                    <a href="" style="color: #00b1b3"><b>Dara</b></a><br>
                                                    <p>If you want to skip these tags, try to use <span style="color: red">strip_tags()</span> function. Check further </p>
                                                    <a href="" style="color: #00b1b3">documentation here.</a><br>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="col-xs-12 col-md-1">
                                                    <img src="http://api.randomuser.me/portraits/men/24.jpg" alt="Todd Shelton" class="img-responsive img-circle" style="width: 50px;height: 50px">
                                                </div>
                                                <div class="col-xs-12 col-md-11">
                                                     <div class="row">
                                                          <div class="col-md-8">
                                                              <textarea class="form-control" rows="7">
                                                        </textarea>
                                                          </div>
                                                     </div>
                                                    <br>
                                                     <div class="row">
                                                         <div class="col-md-offset-6">
                                                             <button class="btn btn-primary">post your apply</button>
                                                         </div>
                                                     </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
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
@endsection