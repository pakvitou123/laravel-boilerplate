@extends('frontend.layouts_new.app')
@section('content')
    <div class="col-md-12">
        <div class="col-md-3" style="">
            @include('frontend.layouts_new.side-bar')
        </div>
        <div class="col-md-9">
            @include('frontend.layouts_new.home_page.content')

            {{--Notification--}}
            {{--<script type="text/javascript" src="js/jquery.min.1.9.js"></script>--}}
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

            {{--Scroll-hieght--}}
            <script type="text/javascript">
                $(function() {
                    //  changes mouse cursor when highlighting loawer right of box
                    $(document).on('mousemove', 'textarea', function(e) {
                        var a = $(this).offset().top + $(this).outerHeight() - 16,	//	top border of bottom-right-corner-box area
                            b = $(this).offset().left + $(this).outerWidth() - 16;	//	left border of bottom-right-corner-box area
                        $(this).css({
                            cursor: e.pageY > a && e.pageX > b ? 'nw-resize' : ''
                        });
                    })
                    //  the following simple make the textbox "Auto-Expand" as it is typed in
                        .on('keyup', 'textarea', function(e) {
                            //  the following will help the text expand as typing takes place
                            while($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth"))) {
                                $(this).height($(this).height()+1);
                            };
                        });
                });
            </script>
        </div>
    </div>



@endsection