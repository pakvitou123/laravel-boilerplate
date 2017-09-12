@extends('frontend.layouts_new.app')
@section('content')

    <div class="col-md-12">

        <div class="col-md-3" style="">
            @include('frontend.layouts_new.side-bar')
        </div>
        <div class="col-md-9">
            @include('frontend.layouts_new.home_page.content')
        </div>
    </div>

@endsection