@section('top')
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{url('public/images/userimages/'.Auth::user()->image)}}" alt="">{{Auth::user()->name}}
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>
                            @if(\Illuminate\Support\Facades\Auth::user()->user_type =='admin')
                <li role="presentation" class="dropdown">
                    <a href="" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green"></span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">


                        <li>
                            <a href="">
                          <b><span></span></b>
                          <br>
                          <i style="font-size:12px;"></i>
                          <span class="time">
                              5 min ago
                              </span>
                        </span>
                                <span class="message">

                        </span>
                            </a>
                        </li>
                        <li>
                            <div class="text-center">
                                <a href="">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                @else
                @endif
            </ul>
        </nav>
    </div>
</div>

    @stop