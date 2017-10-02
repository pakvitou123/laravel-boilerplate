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
    <script src="{{ asset('js/jquery.autocomplete.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.7.3/basic/ckeditor.js"></script>
    @yield('header')
    <style>
        *{
            margin: 0px;
            padding:0px;
        }
        body{
            background-color: #ffffff;
        }
    </style>
</head>
<body>
@include('frontend.layouts_new.nav-bar')
    @yield('content')




    @yield('script')
    <script type="text/javascript">

        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn1')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</body>
</html>
