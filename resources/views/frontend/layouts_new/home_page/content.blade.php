
{{--<div class="container col-md-10"  id="user-content">--}}
    {{--@if(count($results) > 0)--}}
        {{--<div class="container-fluid">--}}
            {{--<ul class="list-group" id="contact-list">--}}
                {{--@foreach($results as $result)--}}
                    {{--<li class="list-group-item col-sm-12" style="border-bottom: 0px;border-top: 0px">--}}
                        {{--<div class="col-sm-2">--}}
                            {{--<img src="http://api.randomuser.me/portraits/men/24.jpg"--}}
                                 {{--alt="Todd Shelton" class="img-responsive img-circle"--}}
                                 {{--style="width: 50px;height: 50px">--}}
                        {{--</div>--}}
                        {{--<div class="col-md-9">--}}
                            {{--<a href="" style="color: black">{{$result->first_name}}</a><br>--}}
                            {{--<span><a href="#" style="color: red">Laravel</a> </span>--}}
                            {{--<span><a href="#">15 MINUTES AGO</a></span>--}}
                            {{--<span>By</span>--}}
                            {{--<span><a href="#"> HELPMYWORLD</a></span>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-1">--}}
                            {{--<p>09</p>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix">hello</div>--}}
                    {{--</li>--}}
                    {{--<li class="page-header">--}}
                        {{--<div class="row"></div>--}}
                    {{--</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--@else--}}
        {{--<h1>Not found</h1>--}}
    {{--@endif--}}
{{--</div>--}}
<div class="col-md-12">
    <div class="panel panel-danger">
        <div class="panel-heading">
            Question
        </div>
        <div class="panel-body">
            @if(count($result_question) > 0)
                <div class="container-fluid">
                    <ul class="list-group" id="contact-list">
                        {{--<h1>Okay</h1>--}}
                        @foreach($result_question as $result_questions)
                            <li class="list-group-item ">
                                <div class="col-sm-2">
                                    <img src="{{asset('/img/profile/'.$result_questions->img_user)}}"
                                         alt="Todd Shelton" class="img-responsive img-circle"
                                         style="width: 50px;height: 50px">
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('indexquestion',[$result_questions->id])}}"
                                       style="color: black">
                                        <h4>{{$result_questions->title}}</h4></a>
                                </div>
                                <div class="col-sm-2">
                                    <p>{{count(\App\Models\Answer::where('id_question', $result_questions->id)->get())}} answer</p>
                                </div>
                                <div class="col-sm-2">
                                    <p>{{$result_questions->count_view}} view</p>
                                </div>

                                <div class="clearfix"></div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @else
                <h1>Not found</h1>
            @endif
        </div>
    </div>
</div>

{{--<div class="col-md-12">--}}
{{--<div class="panel panel-primary">--}}
{{--<div class="panel-heading">--}}
{{--Groups--}}
{{--</div>--}}
{{--<div class="panel-body">--}}
{{--@if(count($result_group)>0)--}}
{{--<div class="container-fluid">--}}
{{--<ul class="list-group" id="contact-list">--}}
{{--<h1>Okay</h1>--}}
{{--@foreach($result_group as $result_groups)--}}

{{--<li class="list-group-item">--}}
{{--<div class="col-sm-2">--}}
{{--<img src="{{asset('/img/group/'.$result_groups->img )}}" alt="Todd Shelton"--}}
{{--class="img-responsive img-circle" style="width: 50px;height: 50px">--}}
{{--</div>--}}
{{--<div class="col-md-7">--}}
{{--<a href="{{route('index',[$result_groups->id])}}" style="color: black">--}}
{{--<h4>{{$result_groups->name}}</h4></a>--}}
{{--</div>--}}
{{--<div class="col-sm-2">--}}
{{--<p>09 member</p>--}}
{{--</div>--}}
{{--<div class="col-sm-1">--}}
{{--<a href="{{route('editquestion', [$result_questions->id])}}"><i--}}
{{--class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>--}}
{{--<a href="{{route('deletequestion', [$result_questions->id])}}"><i--}}
{{--class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>--}}
{{--</div>--}}
{{--<div class="clearfix"></div>--}}
{{--</li>--}}
{{--@endforeach--}}
{{--</ul>--}}
{{--</div>--}}
{{--@else--}}
{{--<h1>Not found</h1>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<h1>hello world</h1>--}}


