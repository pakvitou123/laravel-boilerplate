<div class="col-md-9">
    <div class="row">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list-group" id="contact-list">
                            @foreach($results as $result)
                            <li class="list-group-item">
                                <div class="col-xs-12 col-md-1">
                                    <img src="http://api.randomuser.me/portraits/men/24.jpg" alt="Todd Shelton" class="img-responsive img-circle" style="width: 50px;height: 50px">
                                </div>
                                <div class="col-xs-12 col-md-10">
                                    <a href="" style="color: black">{{$result->first_name}}</a><br>
                                    <span ><a href="#" style="color: red">Laravel</a> </span>
                                    <span ><a href="#" >15 MINUTES AGO</a></span>
                                    <span>By</span>
                                    <span ><a href="#"> HELPMYWORLD</a></span>
                                </div>
                                <div class="col-xs-12 col-md-1">
                                    <p>09</p>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                                @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>