@extends($masterPath.'.master.master')

@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <h1>Staff Demand Details</h1>
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
                    <div class="x_content">
                        <form action="" method="post">
                            {{csrf_field()}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="searchCoy">Select Company</label>
                                    <select name="searchCoy" id="searchCoy" class="form-control">
                                        <option value="">[Select Company]</option>

                                        @foreach($employerData as $value)
                                            <option value="{{$value->id}}">{{$value->employer_name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="searchJob">Select Job</label>
                                    <select name="searchJob" id="searchJob" class="form-control">
                                        <option value="">[Select Job]</option>

                                        @foreach($jobDemandDefault as $key=>$value)
                                            <option value="{{$value->jobdemand_title}}">{{$value->jobdemand_title}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="searchDistrict">Select District </label>
                                    <select name="searchDistrict" id="searchDistrict" class="form-control">
                                        <option value="">[Select District]</option>

                                        @foreach($districtData as $key=>$value)
                                            <option value="{{$value->district_name}}">{{$value->district_name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="searchLocation">Search By Location </label>
                                    <input type="text" name="searchLocation" id="searchLocation" class="form-control" placeholder="Search by location">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="searchStatus">Placement Status</label>
                                    <select name="searchStatus" id="searchStatus" class="form-control">
                                        <option value="">[Select Status]</option>

                                            <option value="Pending">Pending</option>
                                            <option value="Expired">Expired</option>
                                            <option value="Placed">Placed</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                <i>Total Application : <span style="color:red; font-weight:bolder">{{count($jobDemand)}}</span></i>
                                    
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                                @if(count($jobDemand)>0)
                                <h2>Application Data || Total <span style="color:red; font-weight:bolder">{{count($jobDemand)}}</span> Job Demand Found</h2>
                                @else
                                @endif

                                @if(count($jobDemand)>0)

                                <table class="table-condensed table-bordered table-hover">
                                    <thead>
                                    <tr style="background-color:grey; color:#fff;">
                                        <th>S.N</th>
                                        <th>Company Name</th>
                                        <th>Job Title</th>
                                        <th>Working Area</th>
                                        <th>Working Experience</th>
                                        <th>Qualification</th>
                                        <th>Salary</th>
                                        <th>Job Opening</th>
                                        <th>Gender</th>
                                        <th>Responsible Person</th>
                                        <th>Contact Number</th>
										<th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jobDemand as $key=>$value)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>
                                        @foreach($employerData as $Value)
                                        @if($Value->id == $value->employer_id)
                                            {{$Value->employer_name}}
                                            @else
                                            @endif
                                        @endforeach
                                        </td>
                                        <td>{{$value->jobdemand_title}}</td>
                                        <td>{{$value->jobdemand_district}}, {{$value->jobdemand_location}}</td>
                                        <td>{{$value->jobdemand_exp}}</td>
                                        <td>{{$value->jobdemand_edu}}</td>
                                        <td>{{$value->jobdemand_salary}}</td>
                                        <td>{{$value->jobdemand_opening}}</td>
                                        <td>{{$value->jobdemand_gender}}</td>
                                        <td>{{$value->jobdemand_responsible}}</td>
                                        <td>{{$value->jobdemand_contact}}</td>
                                        <td>
										@if($value->demand_status == 'Expired')
										<span style="color:Red; font-weight="bolder">{{$value->demand_status}}</span>
									@elseif($value->demand_status == 'Pending')
										<span style="color:Orange; font-weight="bolder">{{$value->demand_status}}</span>
										@else
										<span style="color:Green; font-weight="bolder">{{$value->demand_status}}</span>
											@endif
										</td>
                                        <td><a href="{{url('viewJobDemand/'.$value->id.'/editJobDemand')}}">Edit</a>
                                              <a href="{{url('viewJobDemand/'.$value->id.'/viewJobDemandDetails')}}">View</a><span style="color:grey;"> | </span>
                                            <a href="{{url('viewJobDemand/delete/'.$value->id)}}" onclick="return confirm('Are you sure you want to delete this Trainee?');">Delete</a>
                                        </td>
                                    </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                @else
                                <table class="table-condensed table-bordered table-hover">
                                    <thead>
                                    <tr style="background-color:grey; color:#fff;">
                                        <th>S.N</th>
                                        <th>Job Title</th>
                                        <th>Working Area</th>
                                        <th>Working Experience</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan="5"><h2 class="btn-danger" style="text-align:center;">Sorry ! Data Not Found</h2></td>
                                    </tr>

                                    </tbody>
                                </table>
                                @endif
                               {{--{{$viewTrainee->links()}}--}}

                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection