@extends($masterPath.'.master.master')
@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <h1>Edit Trainee Details</h1>
                    <hr>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Trainee Record Update Form</h2>
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

                                <form action="" data-parsley-validate method="post" class="form-horizontal form-label-left">

                                    {{csrf_field()}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Applicant Name<span style="color:red;">*</span></label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                   placeholder="Enter Applicant Full Name" value="{{$viewTrainee->name}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="ctzn_number">Citizenship No.<span style="color:red;">*</span></label>
                                            <input type="text" name="ctzn_number" id="ctzn_number" class="form-control"
                                                   placeholder="Enter Citizenship Number" value="{{$viewTrainee->ctzn_number}}" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="gender">Gender<span style="color:red;">*</span></label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="{{$viewTrainee->gender}}">{{$viewTrainee->gender}}</option>
                                                <option value=""></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="token">Token No.<span style="color:red;">*</span></label>
                                            <input type="number" name="token_number" id="token_number" class="form-control"
                                                   placeholder="Enter Token Number" value="{{$viewTrainee->token_number}}" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="voucher_appeared">Mela Status<span style="color:red;">*</span></label>
                                            <select name="voucher_appeared" id="voucher_appeared" class="form-control">
                                                <option value="{{$viewTrainee->voucher_appeared}}">{{$viewTrainee->voucher_appeared}}</option>
                                                <option value=""></option>
                                                <option value="Appeared">Appeared</option>
                                                <option value="Not Appeared">
                                                    Not Appeared
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="phone_number1">Phone(Own)<span style="color:red;">*</span></label>
                                            <input type="number" name="phone_number1" id="phone_number1" class="form-control"
                                                   placeholder="Enter Trainee Number" value="{{$viewTrainee->phone_number1}}" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="phone_number2">Phone(Family Member)<span style="color:red;">*</span></label>
                                            <input type="number" name="phone_number2" id="phone_number2" class="form-control" value="{{$viewTrainee->phone_number2}}"
                                                   placeholder="Enter Trainee's Family Number">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="training">Training<span style="color:red;">*</span></label>
                                            <select name="training" id="training" class="form-control">
                                                <option value="{{$viewTrainee->training}}">{{$viewTrainee->training}}</option>
                                                <option value=""></option>
                                                <option value="beautician">Beautician</option>
                                                <option value="Building Electrician">Building Electrician</option>
                                                <option value="Junior Plumber">Junior Plumber</option>
                                                <option value="tailoring">Tailoring</option>
                                                <option value="Un Verify">Un Verify</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="training_event">Event ID</label>
                                            <select name="training_event" id="training_event" class="form-control">
                                                <option value="{{$viewTrainee->training_event}}">{{$viewTrainee->training_event}}</option>
                                                <option value=""></option>
                                                @foreach($trainingCode as $key=>$value)
                                                    <option value="{{$value->training_code}}">{{$value->training_code}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="location">Prefered Location<span style="color:red;">*</span></label>
                                            <input type="text" name="location" id="location" class="form-control"
                                                   placeholder="Enter Training Location" value="{{$viewTrainee->location}}" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="trainee_status">Trainee Status</label>
                                            <select name="trainee_status" id="trainee_status" class="form-control">
                                                <option value="{{$viewTrainee->trainee_status}}">{{$viewTrainee->trainee_status}}</option>
                                                <option value=""></option>
                                                <option value="Selected">Selected</option>
                                                <option value="Not Selected">Not Selected</option>
                                            </select>
                                        </div>
                                    </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="year">Year</label>
                                                <select name="year" id="year" class="form-control">
                                                    <option value="{{$viewTrainee->year}}">{{$viewTrainee->year}}</option>
                                                    <option value=""></option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="year">Training Provider</label>
                            @if(\Illuminate\Support\Facades\Auth::user()->user_type =='admin')
                                                <select name="organization" id="organization" class="form-control">
                                                    <option value="{{$viewTrainee->organization}}">{{$viewTrainee->organization}}</option>
                                                    <option value=""></option>
                                    @foreach($userData as $key=>$value)
                                        <option value="{{$value->username}}">{{$value->username}}</option>
                                    @endforeach
                                    </select>
                                    @else
                                                <select name="organization" id="organization" class="form-control" >
                                        <option value="{{$viewTrainee->organization}}">{{$viewTrainee->organization}}</option>
                                        <option>{{Auth::user()->username}}</option>
                                        </select>
                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
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