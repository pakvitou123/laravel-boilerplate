<div class="col-md-3 sidebar2 ">
    <div class="logo text-center">
        <div>
            @if(Auth::guest())
                <a href="#">
                    <button type="button" class="btn btn-default Add-friend">
                        <i class="fa fa-rocket" aria-hidden="true"></i> Create Account
                    </button>
                </a>
            @else
                <a href="{{route('group')}}">
                    <button type="button" class="btn btn-default Add-friend">
                        <i class="fa fa-rocket" aria-hidden="true"></i> Create Group
                    </button>
                </a>

            @endif

        </div>
    </div>
    <br>
    <div class="left-navigation">
        <ul class="list">
            <span style="padding-left: 40px">CHOOSE A FILTER</span>
            <li><i class="fa fa-globe" aria-hidden="true"></i>ALL Thread</li>
            <li><i class="fa fa-thumbs-up" aria-hidden="true"></i>Popular This week</li>
            @if(!Auth::guest())
                <li><i class="fa fa-users" aria-hidden="true"></i>My Group</li>
                <li><i class="fa fa-lightbulb-o" aria-hidden="true"></i>My Question</li>
                @endif

            <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>Solved</li>
            <li><i class="fa fa-certificate" aria-hidden="true"></i>Unsolved</li>
            <li><i class="fa fa-users" aria-hidden="true"></i></i>No Replies Yet</li>
            <li><i class="fa fa-bar-chart" aria-hidden="true"></i>Leaderborde</li>
        </ul>
    </div>
</div>