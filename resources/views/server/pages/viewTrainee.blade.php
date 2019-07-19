@extends($masterPath.'.master.master')

@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <h1>Show Trainee</h1>
                    @if(session('success'))
                        <span class="alert alert-success"> {{session('success')}}</span>
                    @endif
                    @if($errors->any())
                        <ul  class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                        <hr>
                    @endif
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Trainee Data</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                <i>Total Applicant : <span style="color:red; font-weight:bolder">{{count($viewTrainee)}}</span></i>
                                    
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <table class="table-condensed table-bordered table-hover">
                                    <thead>
                                    <tr style="background-color:grey; color:#fff;">
                                        <th>S.N</th>
                                        <th>Applicant Name</th>
                                        <th>Citizenship No.</th>
                                        <th>Token No.</th>
                                        <th>Gender</th>
                                        <th>Mela Statua</th>
                                                                        @if(\Illuminate\Support\Facades\Auth::user()->user_type =='user')
                                                                        @else
                                        <th>Contact No.</th>
                                        @endif
                                        <th>Training</th>
                                        <th>Event ID</th>
                                        <th>Location</th>
                                        <th>T&E</th>
                                        <th>Status</th>
                                                                        @if(\Illuminate\Support\Facades\Auth::user()->user_type =='user')
                                                                        @else
                                        <th>Action</th>
                                        @endif
                                        <th>Year</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($viewTrainee as $key=>$value)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->ctzn_number}}</td>
                                        <td>{{$value->token_number}}</td>
                                        <td>{{$value->gender}}</td>
                                        <!--<td>{{$value->voucher_appeared}}</td>-->
                                        @if($value->voucher_appeared == 'Not Appeared')
                                        <td><span style="color:red;">{{$value->voucher_appeared}}</span></td>
                                        @else
                                        <td style="color:#0D953F; font-weight:bolder">{{$value->voucher_appeared}}</td>
                                        @endif
                                                                        @if(\Illuminate\Support\Facades\Auth::user()->user_type =='user')
                                                                        
                                                                        @else
                                                                        <td>
                                            {{$value->phone_number1}} {{$value->phone_number2}}
                                            </td>
                                            @endif
                                            
                                        <!--<td>{{$value->training}}</td>-->
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
                                        <td>{{$value->organization}}</td>
                                        <!--<td>{{$value->trainee_status}}</td>-->
                                        @if($value->trainee_status == 'Selected')
                                        <td><span style="color:#0D953F; font-weight:bolder">{{$value->trainee_status}}</span></td>
                                        @else
                                        <td style="color:#E52B0A; font-weight:bolder">{{$value->trainee_status}}</td>
                                        @endif
                                        
                                                                        @if(\Illuminate\Support\Facades\Auth::user()->user_type =='user')
                                                                        
                                                                        @else
                                                                        <td>
                                            <a href="{{url('viewTrainee/'.$value->id.'/editTrainee')}}">Edit</a><span style="color:grey;"> | </span>
                                            <a href="{{url('viewTrainee/delete/'.$value->id)}}" onclick="return confirm('Are you sure you want to delete this Trainee?');">Delete</a>
                                            </td>
@endif
                                        <td>{{$value->year}}</td>
                                    </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                               {{--{{$viewTrainee->links()}}--}}

                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection