@extends('frontend.layouts_new.app')
@section('content')

    <div class="col-md-12">

        <div class="col-md-3" style="">
            @include('frontend.layouts_new.side-bar')
        </div>
        <div class="col-md-9">
            @include('frontend.layouts_new.home_page.content')
            <script type="text/javascript" src="js/jquery.min.1.9.js"></script>
            <script type="text/javascript" >
                $(document).ready(function()
                {
                    $("#notificationLink").click(function()
                    {
                        $("#notificationContainer").fadeToggle(300);
                        $("#notification_count").fadeOut("slow");
                        return false;
                    });

//Document Click hiding the popup
                    $(document).click(function()
                    {
                        $("#notificationContainer").hide();
                    });

//Popup on click
                    $("#notificationContainer").click(function()
                    {
                        return false;
                    });

                });
            </script>
        </div>
    </div>


@endsection