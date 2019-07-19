@extends($masterPath.'.master.master')

@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    @if(session('success'))
                        <span class="alert alert-success"> {{session('success')}}</span>
                    @endif
                    @if($errors->any())
                        <ul  class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Search</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form action="" method="post">
                                    {{csrf_field()}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="searchApplicantData">Select Training</label>
                                            <select name="searchApplicantData" id="searchApplicantData" class="form-control">
                                                <option value="">[Select Training]</option>
                                                @foreach($trainingData as $key=>$value)
                                                    <option value="{{$value->training_title}}">{{$value->training_title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
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
                                            <label for="searchDistrict">Select District</label>
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
                        </div>
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>List of Applied Training</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                @if(count($viewApplication)>0)
                                    <h2>Application Data || Total <span style="color:red; font-weight:bolder">{{count($viewApplication)}}</span> Application Found</h2>
                                @else
                                @endif

                                @if(count($viewApplication)>0)

                                    <table class="table-condensed table-bordered table-hover">
                                        <thead>
                                        <tr style="background-color:grey; color:#fff;">
                                            <th>S.N</th>
                                            <th>Applicant Name</th>
                                            <th>Gender</th>
                                            <th>Email</th>
                                            <th>Permanent Address</th>
                                            <th>Temporary Address</th>
                                            <th>Contact</th>
                                            <th>Training</th>
                                            <th>Prefered Training</th>
                                            <th>Prefered Location</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($viewApplication as $key=>$value)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$value->f_name}} {{$value->l_name}}</td>
                                                <td>{{$value->applicant_gender}}</td>
                                                <td>{{$value->email}}</td>
                                                <td>{{$value->p_address}}</td>
                                                <td>{{$value->location}}, {{$value->district}}</td>
                                                <td>{{$value->mbl_number1}} {{$value->mbl_number2}}</td>
                                                <td>{{$value->training1}}</td>
                                                <td>{{$value->training2}}</td>
                                                <td>{{$value->p_location}}</td>
                                                <td>{{$value->applicant_messages}}</td>
                                                <td>
                                                    <a href="{{url('viewApplication/'.$value->id.'/viewApplicationDetails')}}">View</a><span style="color:grey;"> | </span>
                                                    <a href="{{url('viewApplication/delete/'.$value->id)}}" onclick="return confirm('Are you sure you want to delete this Trainee?');">Delete</a>
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
                                            <th>Email</th>
                                            <th>Permanent Address</th>
                                            <th>Temporary Address</th>
                                            <th>Contact</th>
                                            <th>Training</th>
                                            <th>Prefered Training</th>
                                            <th>Prefered Location</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan="12"><h2 class="btn-danger" style="text-align:center;">Sorry ! Your Query do not match, Try Again with valid data</h2></td>
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