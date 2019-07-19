@section('aside')
    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            <div class="clearfix"></div>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" style="padding-top:20px;">
                <div class="menu_section">
                    <h3 style="padding:10px; margin:0; background-color: #0D953F; color:#fff;">User Control</h3>
                    <ul class="nav side-menu">
                            @if(\Illuminate\Support\Facades\Auth::user()->user_type =='admin')
                            <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                            <li><a href="{{route('addUser')}}"><i class="fa fa-user"></i> Users</a></li>
                        @endif
                            <li><a href="{{route('addSlide')}}"><i class="fa fa-image"></i> Add Slide</a></li>
                            <li><a href="{{route('addNews')}}"><i class="fa fa-book"></i> Add News</a></li>
                            <li><a href="{{route('addTraining')}}"><i class="fa fa-spinner fa-pulse"></i> Announce Training</a></li>
                            <li><a href="{{route('addProgram')}}"><i class="fa fa-briefcase"></i> Program</a></li>
                            <li><a><i class="fa fa-align-justify"></i> Front Menu<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('addAbout')}}">About us</a>
                                    </li>
                                    {{--<li><a href="">Profile</a>--}}
                                    {{--</li>--}}
                                    <li><a href="{{route('addProject')}}">Project</a>
                                    </li>
                                </ul>

                            </li>
                            <li><a href="{{route('viewContact')}}"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a>
                            <li><a href="{{route('viewApplication')}}"><i class="fa fa-briefcase"></i> Applied Training</a>

                            <li><a href="/"><i class="fa fa-home"></i> Home Page</a>
                            </li>
                    </ul>
                </div>
                <div class="menu_section">

                </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Settings">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('logout')}}">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
            </div>
            <!-- /menu footer buttons -->
        </div>
    </div>
@stop