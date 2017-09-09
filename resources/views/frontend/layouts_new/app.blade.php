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
    <style>
        *{
            margin: 0px;
            padding:0px;
        }
        body{
            /*background-color: #e9ebee;*/
            background-color: #ffffff;
            /*background-color: #4267b2;;*/
        }
    </style>
</head>
<body>
    @include('frontend.layouts_new.nav-bar')
    @yield('content')
    {{--@include('frontend.layouts_new.side-bar')--}}






</body>
</html>
