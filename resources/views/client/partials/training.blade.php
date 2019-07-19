
<div class="recommended_items" id="sub-buttom" style="background-color: #fff;"><!--recommended_items-->
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
