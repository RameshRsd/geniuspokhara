
@extends($masterPath.'.master.master')
@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <h1>Jobseeker Details</h1>
                    <hr>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                            <div class="x_content">
                                <table class="table-condensed table-bordered  col-sm-8 col-sm-offset-2">
                                    <thead>
                                        <tr>
                                            <th colspan="2" style="text-align: center;">
                                                     <img src="{{url('public/images/ApplyJob/'.$jobApplication->job_photo)}}" alt="image not found" width="100">
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>Applicant Full Name</td>
                                            <th>{{$jobApplication->job_f_name}} {{$jobApplication->job_l_name}}</th>
                                        </tr>
                                        <tr>
                                            <td>Gender</td>
                                            <th>{{$jobApplication->job_gender}}</th>
                                        </tr>
                                        <tr>
                                            <td>Birth Year</td>
                                            <th>{{$jobApplication->job_birth_year}}</th>
                                        </tr>
                                        <tr>
                                            <td>Marital Status</td>
                                            <th>{{$jobApplication->job_marital_status}}</th>
                                        </tr>
                                        <tr>
                                            <td>Permanent Address</td>
                                            <th>{{$jobApplication->job_district}}, {{$jobApplication->job_address}}</th>
                                        </tr>
                                        <tr>
                                            <td>Contact Number</td>
                                            <th>{{$jobApplication->job_contact1}} {{$jobApplication->job_contact2}}</th>
                                        </tr>
                                        <tr>
                                            <td>1st Prefered Job</td>
                                            <th>{{$jobApplication->job_preference1}}</th>
                                        </tr>
                                        <tr>
                                            <td>2nd Prefered Job</td>
                                            <th>{{$jobApplication->job_preference2}}</th>
                                        </tr>
                                        <tr>
                                            <td>Prefered Location</td>
                                            <th>{{$jobApplication->job_location}}</th>
                                        </tr>
                                        <tr>
                                            <td>Expected Salary</td>
                                            <th>{{$jobApplication->job_salary1}} To {{$jobApplication->job_salary2}}</th>
                                        </tr>
                                        <tr>
                                            <td>Career Plan</td>
                                            <th><p>{{$jobApplication->job_career}}</p></th>
                                        </tr>
                                        <tr>
                                            <td>Messages</td>
                                            <th><p>{{$jobApplication->job_message}}</p></th>
                                        </tr>
                                    </thead>
                                </table>
                                <div class="clearfix"></div>
                                <hr>
                                <div style=" margin-top:30px;">
                                    <a href="{{route('viewJobApplication')}}" style="padding:10px 15px; background-color:#2A3F54; color:#fff;">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>

@endsection