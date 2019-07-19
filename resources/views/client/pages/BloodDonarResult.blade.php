<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Result || Blood Database || Genius Service Nepal</title>
    <link rel="stylesheet" href="{{url('public/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/nprogress.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/prettify.min.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/custom.min.css')}}">
</head>
<body style="margin:20px auto; width:800px; text-align:center;">
    <div  class="container">
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
                                
                                                @foreach($DefaultDistrict as $key=>$value)
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
                        <div>
                           <a href="BloodDatabase/#register" class="btn btn-success">Register</a>
                        </div>
                        <hr>
                    </form>
                        </div>
                        @if(count($BloodData)>0)
                            <h4>Blood Donar Data || Total <span style="color:red; font-weight:bolder">{{count($BloodData)}}</span> Details Found</h4>
                        @else
                        @endif
        <div style="marign:0 auto;">
            <table class="table table-condensed table-bordered table-hover">
                <thead>
                    <tr>
                        <td>SN</td>
                        <td>Name</td>
                        <td>Location</td>
                        <td>Blood Group</td>
                        <td>Contact Number</td>
                        <td>Vehicle Status</td>
                    </tr>
                </thead>
                @if(count($BloodData)>0)
                <tbody>
                    <tr>
                                            @foreach($BloodData as $key=>$value)
                                                <tr>
                                                    <td>{{++$key}}</td>
                                                    <td>{{$value->b_fname}} {{$value->b_mname}} {{$value->b_lname}}</td>
                                                    <td>{{$value->b_taddress}} {{$value->b_tlocaiton}}</td>
                                                    <td>{{$value->b_group}}</td>
                                                    <td><a href="email:geniusservicenepal@gmail.com" class="btn btn-warning btn-xs">Request Number</a></td>
                                                    <td>{{$value->b_vehicle}}</td>
            
                                                </tr>
                                            @endforeach
                    </tr>
                </tbody>
                                @else
                                    <tbody>
                                    <tr>
                                        <td colspan="6"><h5 class="btn-danger" style="text-align:center;">data not found</h5></td>
                                    </tr>
                                    </tbody>
                                @endif
            </table>
        </div>
    </div>
    </div>
</body>
</html>
