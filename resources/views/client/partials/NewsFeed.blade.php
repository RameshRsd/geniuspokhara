<div class="col-sm-12 col-xs-12" style="background-color: #fff; padding:0;">
    <div class="recommended_items" id="sub-buttom"><!--recommended_items-->
        <h5 class="title text-center">Notice</h5>
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