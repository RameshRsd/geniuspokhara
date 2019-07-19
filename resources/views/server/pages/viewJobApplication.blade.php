@extends($masterPath.'.master.master')

@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <h1>View Applied Job</h1>
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
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="searchGender">Select Gender</label>
                                    <select name="searchGender" id="searchGender" class="form-control">
                                        <option value="">[Select Gender]</option>
                                            <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="searchDistrict">Select District (Temporary)</label>
                                    <select name="searchDistrict" id="searchDistrict" class="form-control">
                                        <option value="">[Select District]</option>

                                        @foreach($districtData as $key=>$value)
                                            <option value="{{$value->district_name}}">{{$value->district_name}}</option>
                                        @endforeach

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
                                <i>Total Application : <span style="color:red; font-weight:bolder">{{count($jobApplication)}}</span></i>
                                    
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                @if(count($jobApplication)>0)
                                <h2>Job Application Data || Total <span style="color:red; font-weight:bolder">{{count($jobApplication)}}</span> Application Found</h2>
                                @else
                                @endif
							<p><a href="{{route('jobPrint')}}" class="btn btn-warning btn-xs">Print</a></p>
                                @if(count($jobApplication)>0)

                                <table class="table-condensed table-bordered table-hover">
                                    <thead>
                                    <tr style="background-color:grey; color:#fff;">
                                        <th>S.N</th>
                                        <th>Applicant Name</th>
                                        <th>Contact</th>
                                        <th>1st Prefered Job</th>
                                        <th>2nd Prefered Job</th>
                                        <th>Prefered Location</th>
                                        <th>Expected Salary</th>
                                        <th>Photo</th>
										<th>Reference</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jobApplication as $key=>$value)
                                    
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td><a href="{{url('viewJobApplication/'.$value->id.'/viewJobApplicationDetails')}}">{{$value->job_f_name}}</a></td>
                                        <td><a href="tel:{{$value->job_contact1}}">{{$value->job_contact1}}</a></td>
                                        <td>{{$value->job_preference1}}</td>
                                        <td>{{$value->job_preference2}}</td>
                                        <td>{{$value->job_location}}</td>
                                        <td>{{$value->job_salary1}} to {{$value->job_salary2}}</td>
                                        <td><img src="{{url('public/images/ApplyJob/'.$value->job_photo)}}" alt="image not found" width="50"></td>
                                        <td>{{$value->job_source}}</td>
										<td>
                                            <a href="{{url('viewJobApplication/delete/'.$value->id)}}" onclick="return confirm('Are you sure you want to delete this Trainee?');">Delete</a>
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
                                        <th>Applicant Name</th>
                                        <th>Gender</th>
                                        <th>Birth Year</th>
                                        <th>Marital Status</th>
                                        <th>Permanent Address</th>
                                        <th>Contact</th>
                                        <th>1st Prefered Job</th>
                                        <th>2nd Prefered Job</th>
                                        <th>Prefered Location</th>
                                        <th>Expected Salary</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan="13"><h2 class="btn-danger" style="text-align:center;">Sorry ! Your Query do not match, Try Again with valid data</h2></td>
                                    </tr>

                                    </tbody>
                                </table>
                                @endif
                            {{$jobApplication->links()}}

                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection