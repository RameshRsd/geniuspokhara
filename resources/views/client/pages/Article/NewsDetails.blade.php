@extends($masterPath.'.master.master')

@section('content')

    <div class="news-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-xs-12">
                    <div class="col-sm-12 col-xs-12 article" style="padding: 20px 0; border-bottom:1px solid #c3c3c2; margin-bottom: 10px;">
                    <h2>{{$article->news_title}}</h2>
                        <img src="{{url('public/images/news/'.$article->news_photo)}}" style="width:100%; height:auto; padding:5px;" alt="" />
                        <a  style="color:Blue;"><i class="fa fa-calendar" aria-hidden="true"></i> <span style="color:Red;">{{$article->created_at }}</span></a>
                        | <a style="color:Blue;"><i class="fa fa-user" aria-hidden="true"></i> Author :
                            <span style="color:Red;">
                        @foreach($userData as $users)
                                    @if($users->id == $article->user_id)
                                        {{$users->name}}
                                    @else
                                    @endif
                                @endforeach
                            </span>
                        </a>
                        <hr>
                        <span>
                            {!! $article->news_description !!}
                        </span>
                    </div>
                    <h4 style="padding:10px 10px 0 10px;">Related News</h4>
                    <hr>
                    @foreach($newsData as $newsValue)
                        <div class="col-sm-3 col-xs-12 news-feed">
                            {{--<div class="product-image-wrapper">--}}
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{url('NewsFeed/'.$newsValue->id.'/NewsDetails')}}">
                                        <img src="{{url('public/images/news/'.$newsValue->news_photo)}}" style="width:200px; height:100px; padding:5px;" alt="" />
                                        <h5>{{$newsValue->news_title}}</h5>
                                    </a>
                                </div>
                                {{--</div>--}}
                            </div>
                        </div>
                    @endforeach
                    <div class="col-sm-12 col-xs-12" style="text-align: center; margin-bottom: 20px;">
                        <hr>
                        <a href="" class="btn btn-default add-to-cart">View All</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-sm-12" style="margin:20px 0 20px 0;">
                        @include($masterPath.'.partials.training')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection