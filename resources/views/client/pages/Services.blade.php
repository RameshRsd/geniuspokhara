@extends($masterPath.'.master.master')

@section('content')



    <section id="news-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="left-sidebar ">
                        <h2>Our Services</h2>
                        <div class="panel-group category-products" id="accordian" style="text-align: center;">
                            <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center; background-color:#181921; padding:20px;">
                                <h1>HR Solutions</h1>
                                <hr>
                                <img src="{{url('public/images/service/01-Job Placement Service Brochure.jpg')}}" class="img-responsive" style="margin:auto;" alt="" />
                            </div>
                            <div style="clear:both;"></div>
                            <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center; background-color:#630d0d; padding:20px;">
                                <h1>Office Supply</h1>
                                <hr>
                                <img src="{{url('public/images/service/03-Supply Service Brochure.jpg')}}" class="img-responsive" style="margin:auto;" alt="" />
                            </div>
                            <div style="clear:both;"></div>
                            <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center; background-color:#094825; padding:20px;">
                                <h1>Technical Service</h1>
                                <hr>
                                <img src="{{url('public/images/service/04-Technical Service Brochure.jpg')}}" class="img-responsive" style="margin:auto;" alt="" />
                            </div>
                            <div style="clear:both;"></div>
                        </div>
					</div>
                </div>
            </div>
        </div>
    </section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
                    <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">recommended trainings</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($trainingData as $key=>$training)
                                    @if($key==0)
                                        <div class="item active">

                                            <div class="col-sm-12">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{url('public/images/training/'.$training->training_banner)}}" style="width:200px; height:150px; border:1px solid #f3f3f3; padding:5px;" alt="" />
                                                            <h4>{{$training->training_title}}</h4>
                                                            <a href="Search" class="btn btn-default add-to-cart">Read more <i class="fa fa-fast-forward"></i></a>
                                                            <br><a href="application_form">Click here for online application form</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    @else
                                        <div class="item">
                                            <div class="col-sm-12">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{url('public/images/training/'.$training->training_banner)}}" style="width:200px; height:150px; border:1px solid #f3f3f3; padding:5px;" alt="" />
                                                            <h4>{{$training->training_title}}</h4>
                                                            <a href="Search" class="btn btn-default add-to-cart">Read more <i class="fa fa-fast-forward"></i></a>
                                                            <br><a href="application_form">Click here for online application form</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div><!--/recommended_items-->
				</div>
                <div class="col-sm-8 col-xs-12 internship">
                    <h2 class="title text-center">Paid Internships and Job Placement</h2>
                    <ul>
                        <li>Appoint students to the respective counselor for “customized counseling” on an individual basis. Each individual is suggested an appropriate computer course and offered discrete career counseling with respect to national as well as international software market.</li>
                        <li>Begin professional and job-oriented computer training session.</li>
                        <li>Provide reliable and consistent supervision throughout the project development period and monitor students' performance, growth and progress.</li>
                        <li>Provide internship for dedicated and promising candidates at our computer institute and software companies in Kathmandu and provide job assistance, and placement services.</li>
                    </ul>
                    <p>Are You Searching for the best job ? <a href="https://sajhajob.com/" target="_blank"><span>Click here</span></a></p>
                </div>
			</div>
		</div>
	</section>
@endsection