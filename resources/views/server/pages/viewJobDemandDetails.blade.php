
@extends($masterPath.'.master.master')
@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <h1>View Job Detail</h1>
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
                                            <td>Company Name</td>
                                            <th>{{$jobDemand->jobdemand_coy}} </th>
                                        </tr>
                                        <tr>
                                            <td>Job Title</td>
                                            <th>{{$jobDemand->jobdemand_title}}</th>
                                        </tr>
                                        <tr>
                                            <td>Job Location</td>
                                            <th>{{$jobDemand->jobdemand_district}}, {{$jobDemand->jobdemand_location}}</th>
                                        </tr>
                                        <tr>
                                            <td>Job Experience</td>
                                            <th>{{$jobDemand->jobdemand_exp}}</th>
                                        </tr>
                                        <tr>
                                            <td>Job Specifiation</td>
                                            <th>{{$jobDemand->jobdemand_spec}} </th>
                                        </tr>
                                        <tr>
                                            <td>Job Description</td>
                                            <th>{{$jobDemand->jobdemand_desc}}  </th>
                                        </tr>
                                        <tr>
                                            <td>Contact Person</td>
                                            <th>{{$jobDemand->jobdemand_responsible}}</th>
                                        </tr>
                                        <tr>
                                            <td>Contact Number</td>
                                            <th>{{$jobDemand->jobdemand_contact}}</th>
                                        </tr>
                                        <tr>
                                            <td>Applying Procedure</td>
                                            <th>{{$jobDemand->jobdemand_apply}}</th>
                                        </tr>
                                    </thead>
                                </table>
                                <div class="clearfix"></div>
                                <hr>
                                <div style=" margin-top:30px;">
                                    <a href="{{route('viewJobDemand')}}" style="padding:10px 15px; background-color:#2A3F54; color:#fff;">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>

@endsection