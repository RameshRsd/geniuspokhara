@extends($masterPath.'.master.master')

@section('content')

    <section class="Project" style="background-color: #eff0f1;">
        <div class="container">
            <div class="row">
                <!--<div class="col-sm-3">-->
                <!--<h4 style="margin-top:20px; border-bottom: 1px solid #d2d0d0; padding-bottom: 10px;">Select From List</h4>-->
                <!--    <div class="col-sm-12 col-xs-12">-->
                <!--        <div style="padding:10px; background-color: #fff; border: 1px solid #d2d0d0; margin-bottom: 10px;">-->
                <!--            <ul>-->
                <!--    @foreach($ProjectData as $value)-->
                <!--    @if($value->project_status == 1)-->
                <!--    @if($value->project_name == 'Office Program')-->
                <!--    @else-->
                <!--                <li><a href="{{url('#'.$value->project_name)}}">{{$value->project_name}}</a></li>-->
                <!--    @endif-->
                <!--    @else-->
                <!--    @endif-->
                <!--    @endforeach-->
                <!--            </ul>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-sm-12">
                <h4 style="margin-top:20px; border-bottom: 1px solid #d2d0d0; padding-bottom: 10px;">Ongoing Project</h4>
                    @foreach($ProjectData as $value)
                    @if($value->project_status == 1)
                    @if($value->project_name == 'Office Program')
                    @else
                    <div class="col-sm-12 col-xs-12" id="{{$value->project_name}}">
                        <div style="padding:10px; background-color: #fff; border: 1px solid #d2d0d0; margin-bottom: 10px;">
                            <h5 style="font-weight:bolder; font-size:15px; color:#03398a;">{{$value->project_name}}</h5>
                            <i class="fa fa-map-marker" aria-hidden="true"> {{$value->project_address}}</i>
                            <hr>
                            <p>{!! $value->project_description !!}</p>
                            
                            <h5 style="font-weight:bolder; font-size:15px; color:#03398a;">Current Running Program</h5>
                            <table class="table table-bordered table-striped table-hover" style="margin-bottom: 0px;  max-width:100%; overflow: hidden;">
                                <thead>
                                    <tr>
                                        <!--<th>S.N</th>-->
                                        <th>Trade</th>
                                        <th>Location</th>
                                        <th>Duration</th>
                                        <th>Level</th>
                                        <th>Program Type</th>
                                        <th>Male</th>
                                        <th>Female</th>
                                        <th>Total</th>
                                        <th>Year</th>
                                    </tr>
                                </thead>
                                <tbody>
                            @foreach($ProgramData as  $key=>$Program)
                            @if($value->id == $Program->project_id && $Program->status == 'ongoing')
                                    <tr>
                                        <!--<td>{{++$key}}</td>-->
                                            @foreach($tradeData as $training)
                                                @if($training->id == $Program->trade_id)
                                                <td>{{$training->occupation_name}}</td>
                                                @else
                                                @endif
                                            @endforeach
                                            @foreach($districtData as $district)
                                                @if($district->id == $Program->district_id)
                                                <td>{{$district->district_name}}</td>
                                                @else
                                                @endif
                                            @endforeach
                                        <td>{{$Program->training_duration}}</td>
                                        <td>{{$Program->training_level}}</td>
                                        <td>{{$Program->program_type}}</td>
                                        <td>{{$Program->male}}</td>
                                        <td>{{$Program->female}}</td>
                                        <td>{{$Program->total}}</td>
                                        <td>{{$Program->year}}</td>
                                    </tr>
                                    @else
                                    @endif
                            @endforeach
                                </tbody>
                            </table>
                            
                            <h5 style="font-weight:bolder; font-size:15px; color:#03398a;">Completed Program</h5>
                            <table class="table table-bordered table-striped table-hover" style="margin-bottom: 0px;  max-width:100%; overflow: hidden;">
                                <thead>
                                    <tr>
                                        <!--<th>S.N</th>-->
                                        <th>Trade</th>
                                        <th>Location</th>
                                        <th>Duration</th>
                                        <th>Level</th>
                                        <th>Program Type</th>
                                        <th>Male</th>
                                        <th>Female</th>
                                        <th>Total</th>
                                        <th>Year</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                            @foreach($ProgramData as  $key=>$Program)
                            @if($value->id == $Program->project_id && $Program->status == 'completed')
                                    <tr>
                                        <!--<td>{{++$key}}</td>-->
                                            @foreach($tradeData as $training)
                                                @if($training->id == $Program->trade_id)
                                                <td>{{$training->occupation_name}}</td>
                                                @else
                                                @endif
                                            @endforeach
                                            @foreach($districtData as $district)
                                                @if($district->id == $Program->district_id)
                                                <td>{{$district->district_name}}</td>
                                                @else
                                                @endif
                                            @endforeach
                                        <td>{{$Program->training_duration}}</td>
                                        <td>{{$Program->training_level}}</td>
                                        <td>{{$Program->program_type}}</td>
                                        <td>{{$Program->male}}</td>
                                        <td>{{$Program->female}}</td>
                                        <td>{{$Program->total}}</td>
                                        <td>{{$Program->year}}</td>
                                    </tr>
                                    @else
                                    @endif
                            @endforeach
                                </tbody>
                            </table>
                            
                            
                        </div>
                    </div>
                    @endif
                    @else
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>



@endsection