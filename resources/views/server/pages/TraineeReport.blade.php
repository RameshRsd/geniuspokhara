@extends($masterPath.'.master.master')

@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <h4>Trainee Report</h4>
                    <div style="text-align:center;"></h5><a href="searchEvent" class="btn btn-warning btn-xs">Back</a></div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="x_title">
                                <hr>
                                {{--<span> {{$count}} Job found </span>--}}
                                @if(count($searchData)>0)
                                <h2>Trainee Data || Total <span style="color:red; font-weight:bolder">{{count($searchData)}}</span> Trainee/Applicant Found</h2>
                                @else
                                @endif
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <table class="table-condensed table-hover">
                                    <thead>
                                    <tr>
                                        <th>Training Name </th>
                                        <td>Under Maintanance</td>
                                    </tr>
                                    <tr>
                                        <th>Training Venue </th>
                                        <td>Under Maintanance</td>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <table class="table-condensed table-hover">
                                    <thead>
                                    <tr>
                                        <th>Training Provider </th>
                                        <td>Under Maintanance</td>
                                    </tr>
                                    <tr>
                                        <th>Training Code </th>
                                        <td>Under Maintanance</td>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="x_content">

                                @if(count($searchData)>0)
                                <table class="table-condensed table-bordered table-hover">
                                    <thead>
                                    <tr style="background-color:grey; color:#fff;">
                                        <th>S.N</th>
                                        <th>Applicant Name</th>
                                        <th>Citizenship No.</th>
                                        <th>Token No.</th>
                                        <!--<th>Mela Status</th>-->
                                        <th>Gender</th>
                                                                        @if(\Illuminate\Support\Facades\Auth::user()->user_type =='user')
                                                                        @else
                                        <th>Contact No.</th>
                                        @endif
                                        <th>Training</th>
                                        <th>Event ID</th>
                                        <th>Location</th>
                                        <!--<th>Status</th>-->
                                                                        @if(\Illuminate\Support\Facades\Auth::user()->user_type =='user')

                                                                        @else
                                        <th>Action</th>
                                            @endif
                                        <th>T&E</th>
                                        <th>Year</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($searchData as $key=>$value)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->ctzn_number}}</td>
                                        <td>{{$value->token_number}}</td>
                                        <!--@if($value->voucher_appeared == 'Not Appeared')-->
                                        <!--<td><span style="color:red; font-weight:bolder">{{$value->voucher_appeared}}</span></td>-->
                                        <!--@else-->
                                        <!--<td><span style="color:#0D953F; font-weight:bolder">{{$value->voucher_appeared}}</span></td>-->
                                        <!--@endif-->

                                        <td>{{$value->gender}}</td>
                                                                        @if(\Illuminate\Support\Facades\Auth::user()->user_type =='user')

                                                                        @else
                                            <td>{{$value->phone_number1}} {{$value->phone_number2}}
                                            </td>@endif
                                        @if($value->training == 'Un Verify')
                                        <td><span style="color:red;">{{$value->training}}</span></td>
                                        @else
                                        <td>{{$value->training}}</td>
                                        @endif
                                        <td>{{$value->training_event}}</td>
                                        <!--<td>{{$value->location}}</td>-->
                                        @if($value->location == 'Unknown')
                                        <td><span style="color:red;">{{$value->location}}</span></td>
                                        @else
                                        <td>{{$value->location}}</td>
                                        @endif
                                        <!--<td>{{$value->trainee_status}}</td>-->
                                        <!--@if($value->trainee_status == 'Selected')-->
                                        <!--<td><span style="color:#0D953F; font-weight:bolder">{{$value->trainee_status}}</span></td>-->
                                        <!--@else-->
                                        <!--<td style="color:#E52B0A; font-weight:bolder">{{$value->trainee_status}}</td>-->
                                        <!--@endif-->

                                                                        @if(\Illuminate\Support\Facades\Auth::user()->user_type =='user')

                                                                        @else
                                            <td><a href="{{url('viewTrainee/'.$value->id.'/editTrainee')}}">Edit</a><span style="color:grey;"> | </span>
                                            <a href="{{url('viewTrainee/delete/'.$value->id)}}" onclick="return confirm('Are you sure you want to delete this Trainee?');">Delete</a>
                                            </td>
                                            @endif

                                        <td>{{$value->organization}}</td>
                                        <td>{{$value->year}}</td>
                                    </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                               {{--{{$searchData->links()}}--}}
                                    @else
                                <table class="table">
                                    <thead>
                                    <tr style="background-color:grey; color:#fff;">
                                        <th>S.N</th>
                                        <th>Applicant Name</th>
                                        <th>Citizenship No.</th>
                                        <th>Token No.</th>
                                        <th>Gender</th>
                                        <th>Contact No.</th>
                                        <th>Training</th>
                                        <th>Event ID</th>
                                        <th>Location</th>
                                        <th>Action</th>
                                        <th>Year</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan="11"><h2 class="btn-danger" style="text-align:center;">Sorry ! Your Query do not match, Try Again with valid data</h2></td>
                                    </tr>
                                    </tbody>
                                </table>
                                    @endif


                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection