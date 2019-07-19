@extends($masterPath.'.master.master')

@section('content')



    <section id="news-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="left-sidebar" style="padding:0 10px; border: 1px solid #c3c3c2; margin-bottom: 20px; background-color: #fff;">
                        <h5 class="title text-center">About Us</h5>
                        <hr>
                        <div class="panel-group category-products" id="accordian" style="text-align: center;">
                            <div class="col-md-12 col-sm-12 col-xs-12" id="Introduction" style="text-align: center; padding-top:20px;">
                                <h3 style="">Introduction</h3>
                                <hr>
                                <span>
                                @foreach($aboutData as $value)
                                        {!! $value->introduction !!}
                                    @endforeach
                                </span>
                                <hr>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12" id="Mission" style="text-align: center; padding-top:20px;">
                                <h3 style="">Mission & Vision</h3>
                                <hr>
                                <span>
                                    @foreach($aboutData as $value)
                                        {!! $value->mission !!}
                                    @endforeach
                                </span>
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    @include($masterPath.'.partials.training')
                </div>
            </div>
        </div>
    </section>

@endsection