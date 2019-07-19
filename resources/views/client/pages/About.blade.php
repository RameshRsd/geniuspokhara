@extends($masterPath.'.master.master')

@section('content')



    <section id="news-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="left-sidebar ">
                        <h2>About Us</h2>
                        <div class="panel-group category-products" id="accordian" style="text-align: center;">
                            <div class="col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
                                <h4>Introduction</h4>
                                <p>
                                    Genius service Nepal PVT LTD is renown institute providing various types of skill developing training, established with the purpose of producing the skilled manpower according to the demand of the market and with the objective of linking the manpower to the market. We have been registered to company registration office, Value-added Tax (VAT) as well as in Inland revenue office and have approval for providing trainings, job-related services, tender   and supply related services. Our organization is being supervised by energetic, creative thinking young professionals of business, with main aim of serving faster with best quality ever.
                                </p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
                                <h4>परिचय</h4>
                                <p>
                                    जिनियस सर्भिस नेपाल प्रा.लि. बजारको तिव्र माग अनुसारको सिपयुक्त दक्ष जनशक्ति उत्पादन गर्ने र उक्त जनशक्तिलाई रोजगारी बजारमा जोड्ने उद्देश्यका साथ स्थापना भएको तालिम तथा रोजगार प्रदायक संस्था हो । यो संस्था कम्पनी रजिष्टारको कार्यालयमा तथा आन्तरिक राजश्व कार्यालयमा मुल्य अभिवृद्धि कर (VAT) मा दर्ता भई तालिम तालिम तथा रोजगार सेवा प्रदान गर्नुका साथै विविध टेन्डर तथा सप्लाई सम्वन्धि कारोवार र विविध एजेन्सी तथा सेवा प्रदान गर्ने स्वीकृती लिएको छ । व्यावसायिक क्षेत्रमा सृजनात्मक सोच र उर्जा भएका अनुभवि युवा अद्यमिद्धारा सञ्चालित यस संस्थाले छिटो, छरितो, गुणस्तरिय सेवा प्रदान गर्ने लक्ष्य लिएको छ ।
                                </p>
                            </div>
                            
                            <div style="clear:both;"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
                                <h4>Mission (उद्देश्य)</h4>
                                <p>
                                    To establish training and employment services,involve in different tender and supply equipments and other technical services as a quality and trustworthy institution.
                                    <br>
                                    <br>
                                    (तालिम तथा रोजगार सेवा, विविध टेन्डर तथा सप्लाई सम्वन्धि सेवा र अन्य प्राविधिक सेवा प्रदानमा गुणस्तरीय र विश्वस्नीय संस्थाको रुपमा स्थापित गर्ने ।                                
                                    )</p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
                                <h4>Vision</h4>
                                <p>
                                    We are here so that no one remains unemployed due to lack of skills,for  high quality technical
 service,for high quality technical and office purpose goods in reasonable price.
                                    <br>
                                    <br>(
                                    कोहि पनि सिप र क्षमताको कमिले वेरोजगार बस्न नपरोस, छिटो, छरितो र गुणस्तरीय प्राविधिक सेवा सबैले प्राप्त गर्न सकुन र उचि मुल्यमा गुणस्तरीय प्राविधि तथा कार्यालय प्रयोजनका सामानहरु प्राप्त होस ।        
                                    
                                    )</p>
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12" style="margin:20px 0;">
                    <div class="left-sidebar ">
                    <h2>Get In Touch</h2>
                        @foreach($GetTouchData as $key=>$value)
                        <div class="col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
                            <div class="col-md-12 col-sm-12 col-xs-12 center-block">
                                <img src="{{url('public/images/staff/'.$value->s_photo)}}" class="girl img-responsive" alt="" style="width: 150px; height: 150px; text-align: center; margin:auto;">
                            </div>
							
                            <div class="col-md-12 col-sm-12 col-xs-12" style="margin:10px 0 20px 0;">
                                <h4>{{$value->s_name}}</h4>
                                <h5>{{$value->s_position}}</h5>
                                <a href="tel:{{$value->s_contact}}">{{$value->s_contact}}</a><br>
                                <a href="email:{{$value->s_email}}">{{$value->s_email}}</a>
								<hr>
                            </div>

                        </div>
                        @endforeach
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