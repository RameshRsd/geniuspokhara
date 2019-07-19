
@extends($masterPath.'.master.master')
@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>View Application Form</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table-condensed table-bordered  col-sm-8 col-sm-offset-2">
                                    <thead>
                                        <tr>
                                            <th colspan="2" style="text-align: center;">
                                                    <img src="{{url('public/images/training/training (1).png')}}" alt="" style="width:100px; height:100px; border: 1px solid #000;">
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>Applicant Full Name</td>
                                            <th>{{$viewApplication->f_name}} {{$viewApplication->l_name}}</th>
                                        </tr>
                                        <tr>
                                            <td>Gender</td>
                                            <th>{{$viewApplication->applicant_gender}}</th>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <th>{{$viewApplication->email}}</th>
                                        </tr>
                                        <tr>
                                            <td>Permanent Address</td>
                                            <th>{{$viewApplication->p_address}}</th>
                                        </tr>
                                        <tr>
                                            <td>Temporary Address</td>
                                            <th>{{$viewApplication->location}}, {{$viewApplication->district}}</th>
                                        </tr>
                                        <tr>
                                            <td>Contact Number</td>
                                            <th>{{$viewApplication->mbl_number1}} (Own), {{$viewApplication->mbl_number2}} (Family)</th>
                                        </tr>
                                        <tr>
                                            <td>Recent Available Training</td>
                                            <th>{{$viewApplication->training1}}</th>
                                        </tr>
                                        <tr>
                                            <td>Prefered Training</td>
                                            <th>{{$viewApplication->training2}}</th>
                                        </tr>
                                        <tr>
                                            <td>Prefered Location</td>
                                            <th>{{$viewApplication->p_location}}</th>
                                        </tr>
                                        <tr>
                                            <td>Message</td>
                                            <th>{{$viewApplication->applicant_messages}}</th>
                                        </tr>
                                    </thead>
                                </table>
                                <div class="clearfix"></div>
                                <hr>
                                <div style=" margin-top:30px;">
                                    <a href="{{route('viewApplication')}}" style="padding:10px 15px; background-color:#2A3F54; color:#fff;">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>

@endsection