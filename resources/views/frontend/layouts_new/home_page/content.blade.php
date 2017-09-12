
{{--=========================--}}

<div class="question">
    @foreach($result_question as $result_questions)
        <div class="conversation-list">
            <div class="conversation-list-avatar col-md-2 ">
                <div>
                    <img src="{{asset('/img/profile/'.$result_questions->img_user)}}"
                         alt="Todd Shelton" class="img-responsive img-circle"
                         style="border: 2px solid #fff;width: 40px;max-width: 100%;;background: #fff!important;margin-top: 25px;margin-left: -15px">
                </div>
            </div>
            <div class="conversation-list-title col-md-8 is-position">
                <h4 class="is-title ">
                    <a href="{{route('indexquestion',[$result_questions->id])}}">{{$result_questions->title}}</a>
                </h4>
                <div class="is-posted">
                    <span>
                        <a href="#" class="is-link ">QUESTION</a>
                        <a href="#" class="is-link-color ">• 2 MINUTES AGO BY</a>
                        @foreach( $users as $user)
                            @if($result_questions->id_user == $user->id)
                                <a href="#" class="is-link-creator ">{{$user->first_name}}</a>
                                @endif
                            @endforeach
                    </span>
                </div>
                <div class="description ">
                    {{$result_questions->description}}
                    <span class="is-muted">...</span>
                </div>
                <div class="conversation-list-answer-count ">
                    {{count(\App\Models\Answer::where('id_question', $result_questions->id)->get())}}&nbsp;answers
                </div>
                <div class="conversation-list-view-count ">{{$result_questions->count_view}}&nbsp;views
                </div>

            </div>
            <div class="row">
                <hr style="border-color:@default;width: 100% ;margin-left: 15px;margin-top: 115px;">
            </div>
        </div>
    @endforeach
</div>

{{--=============================================================================--}}
{{--<div class="col-md-10">--}}
{{--<div class="panel panel-default" style="border-right: 0px;border-left: 0px;border-bottom: 0px;border-color: #fff;width: 100%;">--}}
{{--<div class="panel-heading">--}}
{{--Question--}}
{{--</div>--}}
{{--<div class="panel-body">--}}
{{--@if(count($result_question) > 0)--}}
{{--<div class="container-fluid">--}}
{{--<ul class="list-group" id="contact-list">--}}
{{--@foreach($result_question as $result_questions)--}}
{{--<li class="list-group-item ">--}}
{{--<div class="col-sm-2">--}}
{{--<img src="{{asset('/img/profile/'.$result_questions->img_user)}}"--}}
{{--alt="Todd Shelton" class="img-responsive img-circle"--}}
{{--style="width: 50px;height: 50px">--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<a href="{{route('indexquestion',[$result_questions->id])}}"--}}
{{--style="color: black">--}}
{{--<h4>{{$result_questions->title}}</h4></a>--}}
{{--</div>--}}
{{--<div class="col-sm-2">--}}
{{--<p>{{count(\App\Models\Answer::where('id_question', $result_questions->id)->get())}}answer</p>--}}
{{--</div>--}}
{{--<div class="col-sm-2">--}}
{{--<p>{{$result_questions->count_view}}view</p>--}}
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


