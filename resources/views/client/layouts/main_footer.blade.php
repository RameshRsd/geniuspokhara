@section('main_footer')
    <footer id="footer"><!--Footer-->

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="single-widget">
                        <div class="companyinfo">
                            <h2><span>about</span>-Genius</h2>
                            <p>
                                GMTI Pvt. Ltd. is located at Amarshing, Pokhara-10, Kaski. The office building comprises about 1600 sq. ft. of office space, consisting of 6 rooms including one big hall and more than sufficient space. In addition, it is comfortably equipped with office equipment, and other facilities required for smooth office management.                            </p>
                            <a href="About">Read More</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Usefull link</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="http://event.gov.np" target="_blank">Event Project</a></li>
                                <li><a href="http://employmentfund.org.np" target="_blank">Employment Fund</a></li>
                                <li><a href="http://ctevt.org.np" target="_blank">CTEVT</a></li>
                                <li><a href="http://nstb.org.np" target="_blank">NSTB</a></li>
                                <li><a href="http://ocr.gov.np" target="_blank">Company Registrar</a></li>
                                <li><a href="http://ird.gov.np" target="_blank">Inland Revenue</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>About Our Site</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                                <li><a href="{{route('About')}}">About Us</a></li>
                                <li><a href="{{route('OnGoingProject')}}">Ongoing Project</a></li>
                                <li><a href="{{route('Gallery')}}">Gallery</a></li>
                                <li><a href="{{route('Profile')}}">Company Profile</a></li>
                                @if(\Illuminate\Support\Facades\Auth::user())
                                <li><a href="{{route('login')}}" class="btn btn-success btn-xs" style="color:#fff; max-width:65%;">Admin Panel</a></li>
                                @else
                                <li><a href="{{route('login')}}" class="btn btn-success btn-xs" style="color:#fff; max-width:65%;">Admin Login</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Contact Information</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Genius Multi Technical Institute Pvt. Ltd.</a></li>
                                <li><a href="#">Pokhara Metropolitan-10, Kaski, Nepal</a></li>
                                <li><a href="#">Email: gmti.pokhara@gmail.com</a></li>
                                <li><a href="Tel: +97761532658">Tel: +97761532658</a></li>
                                <li><a href="Tel: 9856032036">9856032036, 9802967976</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Genius Multi Technical Institute Pvt. Ltd. © {{date('Y')}} All rights reserved.</p><p class="pull-right">Designed by <span><a href="http://geniusservicenepal.com" target="_blank" href="/">Genius Service Nepal</a></span>
                    </p>
                </div>
            </div>
        </div>

    </footer><!--/Footer-->
@stop