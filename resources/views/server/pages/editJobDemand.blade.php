@extends($masterPath.'.master.master')

@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Update Staff Demand status</h2>
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
                                <br/>

                                <form action="" method="post"
                                      enctype="multipart/form-data" class="form-horizontal form-label-left">

                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label class="col-md-12 col-sm-12 col-xs-12">Select Company*
                                        </label>
                                    <select name="employer_id" class="form-control">
                                        @foreach($employerData as $employer)
                                        @if($employer->id == $jobDemand->employer_id)
                                        <option value="{{$employer->id}}">{{$employer->employer_name}}</option>
                                        @else
                                        @endif
                                        @endforeach
                                        @foreach($employerData as $employer)
                                        <option value="{{$employer->id}}">{{$employer->employer_name}}</option>
                                        @endforeach
                                    </select>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label class="col-md-12 col-sm-12 col-xs-12">Job Title*
                                        </label>
										<input type="text" name="jobdemand_title" class="form-control" value="{{$jobDemand->jobdemand_title}}">
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label class="col-md-12 col-sm-12 col-xs-12">Experience/Requirement*
                                        </label>
										<input type="text" name="jobdemand_exp" class="form-control" value="{{$jobDemand->jobdemand_exp}}">
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label class="col-md-12 col-sm-12 col-xs-12">Education*
                                        </label>
										<input type="text" name="jobdemand_edu" class="form-control" value="{{$jobDemand->jobdemand_edu}}">
                                        </div>
										
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label class="col-md-12 col-sm-12 col-xs-12">Gender*
                                        </label>
										<select name="jobdemand_gender" class="form-control" >
										<option value="{{$jobDemand->jobdemand_gender}}">{{$jobDemand->jobdemand_gender}}</option>
										<option value=""></option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										</select>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label class="col-md-12 col-sm-12 col-xs-12">Job Opening*
                                        </label>
										<input type="text" name="jobdemand_opening" class="form-control" value="{{$jobDemand->jobdemand_opening}}">
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label class="col-md-12 col-sm-12 col-xs-12">Salary*
                                        </label>
										<input type="text" name="jobdemand_salary" class="form-control" value="{{$jobDemand->jobdemand_salary}}">
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label class="col-md-12 col-sm-12 col-xs-12">Job Location*
                                        </label>
										<input type="text" name="jobdemand_location" class="form-control" value="{{$jobDemand->jobdemand_location}}">
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label class="col-md-12 col-sm-12 col-xs-12">Responsible Person*
                                        </label>
										<input type="text" name="jobdemand_responsible" class="form-control" value="{{$jobDemand->jobdemand_responsible}}">
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label class="col-md-12 col-sm-12 col-xs-12">Contact Number
                                        </label>
										<input type="text" name="jobdemand_contact" class="form-control" value="{{$jobDemand->jobdemand_contact}}">
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label class="col-md-12 col-sm-12 col-xs-12">Status*
                                        </label>
                                           <select name="demand_status" class="form-control">
											<option value="{{$jobDemand->demand_status}}">{{$jobDemand->demand_status}}</option>
											<option value=""></option>
											<option value="Pending">Pending</option>
											<option value="Placed">Placed</option>
											<option value="Expired">Expired</option>
										   </select>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>

@endsection