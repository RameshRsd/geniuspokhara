@extends($masterPath.'.master.master')

@section('content')

        
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Start Responsive Slider BODY section -->



                @if(count($SlideData)>0)

                        <div id="wowslider-container1">
                            <div class="ws_images"><ul>
                                    @foreach($SlideData as $slideValue)
                                    <li><img src="{{url('public/images/Slide/'.$slideValue->training_photo)}}" title="" id="wows1_0"/>
                                        <span style="color:#043c68;">

                                        @foreach($tradeData as $training)
                                        @if($training->id == $slideValue->trade_id)
                                                    {{$training->occupation_name}}
                                        @else
                                        @endif
                                            @endforeach
                                        </span>
                                        <p style="color:#fff;">{{$slideValue->training_location}}<br>Sponser by:
                                            @foreach($ProjectData as $project)
                                                @if($project->id == $slideValue->project_id)
                                                    {{$project->project_name}}
                                                @else
                                                @endif
                                            @endforeach
                                            <br>
                                            Published By :
                                            @foreach($userData as $users)
                                                @if($users->id == $slideValue->user_id)
                                                    {{$users->name}}
                                                @else
                                                @endif
                                            @endforeach

                                        </p>

                                    </li>
                                    @endforeach
                                </ul></div>
                            <div class="ws_shadow"></div>
                        </div>
                        <script type="text/javascript" src="{{url('public/wow/engine1/wowslider.js')}}"></script>
                        <script type="text/javascript" src="{{url('public/wow/engine1/script.js')}}"></script>

                    @else

                        <div id="wowslider-container1">
                            <div class="ws_images"><ul>
                                    <li><img src="{{url('public/wow/data1/images/training (1).jpg')}}" title="" id="wows1_0"/>
                                        <span style="color:#000;">Office Application Training</span>
                                        <p style="color:#ff0000;">Amarsingh Chowk, Pokhara<br>Sponser by: Event Projec</p>
                                    </li>
                                    <li><img src="{{url('public/wow/data1/images/training (2).jpg')}}" title="" id="wows1_1"/>
                                        <span style="color:#000;">Web Designing Training</span>
                                        <p style="color:#ff0000;">Amarsingh Chowk, Pokhara<br>Sponser by: Event Projec</p>
                                    </li>
                                    <li><img src="{{url('public/wow/data1/images/training (3).jpg')}}" title="" id="wows1_2"/>
                                        <span style="color:#000;">C/C++ Programming Training</span>
                                        <p style="color:#ff0000;">Amarsingh Chowk, Pokhara<br>Sponser by: Event Projec</p>
                                    </li>
                                </ul></div>
                            <div class="ws_shadow"></div>
                        </div>
                        <script type="text/javascript" src="{{url('public/wow/engine1/wowslider.js')}}"></script>
                        <script type="text/javascript" src="{{url('public/wow/engine1/script.js')}}"></script>

                @endif
                    <!-- End Responsive Slider BODY section -->
                </div>
            </div>
        </div>
    </section><!--/slider-->

	<section id="sub-buttom-section">
		<div class="container">
			<div class="row">
                <div class="col-sm-9 col-xs-12">
                    <div class="product-image-wrapper" style="padding:0 10px; background-color: #fff;">
                        <h5 class="title text-center">Message from the Chairperson</h5>
                    <hr>
                        <div class="productinfo text-center">
                            <img src="{{url('public/images/staff/Narayan-adhikari.jpg')}}" style="width:200px; height:150px; border:1px solid #f3f3f3; padding:5px;" alt="" />
                            <br>
                        <p>
                            Over two million Nepalese men and women work abroad other than India as un/semi-skilled labours and domestic workers. The remittances sent by the migrant workers contribute to 21% of the gross domestic product of Nepal and has been a backbone to support the national economy.<br>

                            The increase in labour migration, however, has been accompanied by various problems, including human trafficking. Many Nepalese migrant workers pay high amount of fees to the recruitment agencies, which they take on loan from families and friends which place them in a state of indebtedness, which in turn compel them to perform work in abusive, exploitative and unsafe working environment. Notwithstanding this, Nepal is beset with immense opportunities to provide gainful employment through the promotion of technical and vocational education and skill development programmes.<br>

                            In recent years, skill development in Nepal has attracted heightened interest. The challenges that are driving the interest are economic, social and developmental.As Nepal embarks on the Federal Democratic Republic, we, at Genius, are aware that if we are to attain sustainable development, we must produce the higher valueadded, higher quality goods and services that can yield higher wages and profits. In order to do this, we need a skilled workforce and an education and training system that adequately prepares young people to enter the labour market. This imperative runs alongside current rethinking on the pattern of economic development which seeks not only rapid but also inclusive growth.<br>

                            Founded with an objective to enable sustainable transformation through skill development, Genius Multi Technical Institute has made its mark in the skill development landscape of the country. Its end-to-end training and skill development solutions helps improve business productivity and enhances youth employability making Genius the partner of choice for any skilling initiative in Nepal.<br>

                            Finally, as one of the pioneers in skills development, we commit ourselves to promote opportunities through vocational training and skills development for women and men to obtain decent and productive workforce within the country in attaining the government's overarching strategy of poverty reduction in Nepal.<br>
<br>
                            Sincerely,<br>
                            <b>Narayan Prasad Adhikari <i>(Chairperson)</i></b>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                        <div class="col-sm-12" style="background-color: #fff; padding:0;">
                            <div class="recommended_items" id="sub-buttom"><!--recommended_items-->
                                <h5 class="title text-center">News Feeds</h5>
                                <hr>
                                @if(count($newsData)>0)
                                    @foreach($newsData as $newsValue)
                                        <div class="col-sm-12" style=" border-bottom:1px solid #f3f3f3; padding-bottom:5px;">
                                            {{--<div class="product-image-wrapper">--}}
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <a href="{{url('NewsFeed/'.$newsValue->id.'/NewsDetails')}}" target="_blank">
                                                        <img src="{{url('public/images/news/'.$newsValue->news_photo)}}" style="width:200px; height:100px; padding:5px;" alt="" />
                                                        <h5>{{$newsValue->news_title}}</h5>
                                                    </a>
                                                </div>
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-sm-12 col-xs-12" style="text-align: center; margin-bottom: 10px;">
                                        <hr>
                                        <a href="" class="btn btn-default add-to-cart">View All</a>
                                    </div>
                                @else
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="">
                                                <img src="" style="width:200px; height:150px; border:1px solid #f3f3f3; padding:5px;" alt="" />
                                                <h5>Result Announce</h5>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                            @endif
                        </div><!--/recommended_items-->
                </div>
                    <div class="col-sm-12" style="background-color: #fff; padding:0; margin-top:10px;">
                        <div class="recommended_items" id="sub-buttom"><!--recommended_items-->
                            <h5 class="title text-center">Recommended Trainings</h5>
                            <hr>


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
                                                                <a>{{$training->training_level}} <span style="color:grey; font-size: 13px;">({{$training->training_duration}})</span></a><br>
                                                                <a href="{{route('application_form')}}" class="btn btn-default add-to-cart">Apply Now <i class="fa fa-fast-forward"></i></a>
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
                                                                <a>{{$training->training_level}} <span style="color:grey; font-size: 13px;">({{$training->training_duration}})</span></a><br>
                                                                <a href="{{route('application_form')}}" class="btn btn-default add-to-cart">Apply Now <i class="fa fa-fast-forward"></i></a>
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
                </div>
                </div>
            </div>
	</section>
@endsection