<!DOCTYPE html>
<html lang="en">
<head>
    <title>Stackio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('css/css.css')}}" rel="stylesheet">
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js')}}"></script>

    @yield('header')
</head>
<body>
@include('frontend.layouts_new.nav-bar')
<div class="container-fluid">
    <div class="row">
        {{--@include('frontend.layouts_new.group.side-bar')--}}
        @yield('side-bar')
        @yield('content')
    </div>
</div>

</body>
</html>
