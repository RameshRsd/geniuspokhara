<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blood Database || Genius Service Nepal</title>
    <link rel="stylesheet" href="{{url('public/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/nprogress.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/prettify.min.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/custom.min.css')}}">
</head>
@if(\Illuminate\Support\Facades\Auth::user())
@else
<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                @if(session('error'))
                    <span class="alert alert-danger"> {{session('error')}}</span>
                @endif
                    @if(session('success'))
                        <span class="alert alert-success"> {{session('success')}}</span>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                    <form method="post" action="{{route('BloodDonarResult')}}">
                    {{csrf_field()}}
                    <h3>Search Blood Donar</h3>
                    <div>
                        <select class="form-control" name="bloodGroup" >
                            <option value="">[Select Blood Group]</option>
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="O+">O+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                            <option value="O-">O-</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                        <div style="margin-top:10px;">
                            
                        </div>
                        <div>
                            <select class="form-control" name="searchDistrict">
                                <option value="">[Select District]</option>
                                
                                                @foreach($districtData as $key=>$value)
                                                    <option value="{{$value->district_name}}">{{$value->district_name}}</option>
                                                @endforeach
                            </select>
                        </div>
                        <div style="margin-top:10px;">
                            
                        </div>
                        <div>
                        <input type="text" name="searchBlood" class="form-control" placeholder="Location" />
                        </div>
                        <div>
                            <button type="search" class="btn btn-default" style="margin-top:10px;">Search</button>
                        </div>
                        <hr>
                    </form>
                        </div>
                    </div>
                <form method="post" action="{{route('BloodDatabase')}}"  id="register">
                    {{csrf_field()}}
                    <h1>Register Your Details</h1>
                    <div>
                        <label>First Name</label>
                        <input type="text" name="b_fname" class="form-control" placeholder="First Name" required="" />
                    </div>
                    <div>
                        <label>Middle Name</label>
                        <input type="text" name="b_mname" class="form-control" placeholder="Mid Name"/>
                    </div>
                    <div>
                        <label>Last Name</label>
                        <input type="text" name="b_lname" class="form-control" placeholder="Last Name" required="" />
                    </div>
                    <div>
                        <label>Date of Birth</label>
                        <input type="date" name="b_dob" class="form-control" required="" />
                    </div>
                    <div>
                        <label>Gender</label>
                        <select class="form-control" name="b_gender" >
                            <option value="">[Select Gender]</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div>
                        <label>Contact Number (Own)</label>
                        <input type="text" name="b_contact1" class="form-control" placeholder="Number (Own)" required="" />
                    </div>
                    <div>
                        <label>Contact Number (Family)</label>
                        <input type="text" name="b_contact2" class="form-control" placeholder="Number (Family)"/>
                    </div>
                    <div>
                        <label>Body Weight [ In KG ]</label>
                        <input type="text" name="b_weight" class="form-control" placeholder="Weight" required="" />
                    </div>
                    <div>
                        <label>Want To Donate Blood ?</label>
                        <select class="form-control" name="b_donatestatus" >
                            <option value="">[Select]</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="In case of Emergency">In case of Emergency</option>
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <hr>
                        <label>Permenent Address</label>
                    </div>
                        <div>
                            <select class="form-control" name="b_paddress">
                                <option value="">[Select District]</option>
                                
                                                @foreach($districtData as $key=>$value)
                                                    <option value="{{$value->district_name}}">{{$value->district_name}}</option>
                                                @endforeach
                            </select>
                        </div>
                        <div style="margin-top:10px;">
                            
                        </div>
                        <div>
                        <input type="text" name="b_ploation" class="form-control" placeholder="Location"/>
                        </div>
                    <div class="col-sm-12">
                        <hr>
                        <label>Temporary Address</label>
                    </div>
                        <div>
                            <select class="form-control" name="b_taddress">
                                <option value="">[Select District]</option>
                                
                                                @foreach($districtData as $key=>$value)
                                                    <option value="{{$value->district_name}}">{{$value->district_name}}</option>
                                                @endforeach
                            </select>
                        </div>
                        <div style="margin-top:10px;">
                            
                        </div>
                        <div>
                        <input type="text" name="b_tlocaiton" class="form-control" placeholder="Location" required="" />
                        </div>
                    <div>
                        <label>Blood Group</label>
                        <select class="form-control" name="b_group" >
                            <option value="">[Select]</option>
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="O+">O+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                            <option value="O-">O-</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                    <div>
                        <label>You Have Vehicle?</label>
                        <select class="form-control" name="b_vehicle">
                            <option value="">[Select]</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div ></div>
                    <div>
                        <button type="submit" class="btn btn-default" style="margin-top:10px;">Submit</button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <a href="{{url('/')}}"> <h1><i class="fa fa-paw"></i> Genius </h1></a>
                            <p>©{{date('Y')}} All Rights Reserved. Genius Service Nepal  </p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

    </div>
</div>
</body>
@endif
</html>