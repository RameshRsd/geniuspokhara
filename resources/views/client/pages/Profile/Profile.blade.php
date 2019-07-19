@extends($masterPath.'.master.master')

@section('content')



    <section id="news-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="left-sidebar" style="padding:0 10px; border: 1px solid #c3c3c2; margin-bottom: 20px; background-color: #fff;">
                        <h4 class="title text-center" style="padding:20px 0 0 0;">Organizational Profile</h4>
                        <div class="panel-group category-products" id="accordian" style="text-align: center;">
                            <div class="col-md-12 col-sm-12 col-xs-12" id="Introduction" style="text-align: center; padding-top:20px;">
                                <h5 style="margin:0; padding:0 0 10px; text-align: left;">1. Background</h5>
                                <span>
                                @foreach($aboutData as $value)
                                        {!! $value->introduction !!}
                                    @endforeach
                                </span>
                                <hr>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12" id="Mission" style="text-align: center; padding-top:20px;">
                                <h5 style="margin:0; padding:0 0 10px; text-align: left;">2. Mission & Vision</h5>
                                <span>
                                    @foreach($aboutData as $value)
                                        {!! $value->mission !!}
                                    @endforeach
                                </span>
                                <hr>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12" id="Mission" style="text-align: center; padding-top:20px;">
                                <h5 style="margin:0; padding:0 0 10px; text-align: left;">3. Goal</h5>
                                <span>
                                    @foreach($aboutData as $value)
                                        <p>{!! $value->goal !!}</p>
                                    @endforeach
                                </span>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12" id="Mission" style="text-align: left; padding-top:20px;">
                                <h5 style="margin:0; padding:0 0 10px; text-align: left;">4. Identification</h5>
                                <table border="1" style="margin-bottom:30px; max-width:100%;" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Genius Multi Technical Institute Pvt. Ltd.</th>
                                    </tr>
                                    <tr>
                                        <th style="padding-bottom: 10%;">Address/Phone Numbers</th>
                                        <td>
                                            <table class="table table-bordered table-striped table-hover" style="margin-bottom: 0px;  max-width:100%; overflow: hidden;">
                                                <tr>
                                                    <td>Head Office</td>
                                                    <td>
                                                        Amar Shing Chowk, Pokhara Sub-Metropolitan City-10, Kaski
                                                        <br>
                                                        +97761532658
                                                        <br>
                                                        gmti.pokhara@gmail.com
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Branches</td>
                                                    <td>
                                                        Sitapaila, Kathmandu, Nepal
                                                        <br>
                                                        01-4359774
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="padding-bottom: 10%;">Legal Registration</th>
                                        <td>
                                            <table class="table table-bordered table-striped table-hover" style="margin-bottom: 0px;  max-width:100%; overflow: hidden;">
                                                <tr>
                                                    <td>Company</td>
                                                    <td>
                                                        Office of Company Registration, Tripureshwore, Kathmandu<br>
                                                        Registration No.: <br>
                                                        Date:
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>VAT</td>
                                                    <td>
                                                        Office of Internal Revenue, Pokhara, Kaski<br>
                                                        VAT No.: 304439546<br>
                                                        Registration Date:
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Instituion</td>
                                                    <td>
                                                        Council for Technical Education and Vocational Training (CTEVT) for Short Term Training.<br>
                                                        Registration Date:
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12" id="Mission" style="text-align: center; padding-top:20px;">
                                <h5 style="margin:0; padding:0 0 10px; text-align: left;">3. Organizational Structure</h5>
                                <img src="{{url('public/images/home/organizational _structure.png')}}" alt="Image Not Found" style="width:80%;">
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                </div>
                {{--<div class="col-sm-3 col-xs-12">--}}
                    {{--@include($masterPath.'.partials.training')--}}
                {{--</div>--}}
            </div>
        </div>
    </section>

@endsection