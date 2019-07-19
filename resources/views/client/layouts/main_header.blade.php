@section('main_header')
    <header id="header"><!--header-->
        <div class="logo-section" style="background-color:#eff0f1; padding: 10px 5px;">
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <div class="logo pull-left">
                       <a href="{{url('/')}}"> <img class="img-responsive" src="{{url('public/images/home/logo.png')}}" alt="logo"></a>
                       </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <div class="contactinfo" style="margin-top: 10px;">
                            <ul class="nav nav-pills">
                                <li><a href="Tel: 061532658"><i class="fa fa-phone"></i> +97761532658</a></li>
                                <li><a href="mail:gmti.pokhara@gmail.com"><i class="fa fa-envelope"></i> gmti.pokhara@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <div class="social-icons pull-right"  style="margin-top: 10px;">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/gmti.pkr" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-xs-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu">
                            <ul class="nav navbar-nav collapse navbar-collapse ">
                                <li><a href="{{url('/')}}" ><span class="glyphicon glyphicon-home"></span> HOME</a></li>
                                <li class="main-menu"><a href="{{route('About')}}">ABOUT US <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{url('/About/#Introduction')}}" >Introduction</a></li>
                                        <li><a href="{{url('/About/#Mission')}}" >Mission & Vision</a></li>
                                    </ul>
                                </li>
                                <li class="main-menu"><a href="{{route('Profile')}}">PROFILE</a></li>
                                <li class="main-menu"><a>PROJECT/FUNDS <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('OnGoingProject')}}" >Ongoing Project</a></li>
                                        <li><a href="{{route('CompletedProject')}}" >Completed Project</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('Gallery')}}">GALLERY</a></li>
                                <li><a href="{{route('contact')}}">CONTACT US</a></li>

                                {{--@if(\Illuminate\Support\Facades\Auth::user())--}}
                                    {{--<li class="main-menu"><a class="btn btn-success btn-xs" style="color:#fff; padding:5px;">Online: {{Auth::user()->name}}</a>--}}
                                        {{--<ul class="sub-menu">--}}
                                            {{--<li><a href="{{route('admin')}}">Dashboard</a></li>--}}
                                            {{--<li><a href="{{route('logout')}}"><i class="fa fa-unlock"></i> Logout</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--@else--}}
                                    {{--<li><a>Login</a></li>--}}
                                {{--@endif--}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-xs3">
                        <div class="search_box pull-right">
                            <a href=""><img class="img-responsive" src="{{url('public/CTEVT.png')}}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    <div style="clear:both;"></div>
    <div id="space"></div>
@stop