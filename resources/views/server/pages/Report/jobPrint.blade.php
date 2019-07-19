<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{url('public/logo.png')}}">
    <title>@yield('title',$title)</title>
    <link rel="stylesheet" href="{{url('public/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/nprogress.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/prettify.min.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/custom.min.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/ckeditor/contents.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/custom.css')}}">
</head>
<body class="nav-md">
<div class="container body">
<div class="col-sm-12 col-md-12 col-xs-12">
<h4>Applied job Details</h4>
<table class="table-bordered table-hover">
	<thead>
	<tr>
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
										<th>Reference</th>
	</tr>
	</thead>
	<tbody>
	@foreach($jobApplication as $key=>$value)
	<tr>
	<td>{{++$key}}</td>
	<td>{{$value->job_f_name}}, {{$value->job_l_name}}</td>
	<td>{{$value->job_gender}}</td>
	<td>{{$value->job_birth_year}}</td>
	<td>{{$value->job_marital_status}}</td>
	<td>{{$value->job_district}}, {{$value->job_address}}</td>
	<td>{{$value->job_contact1}}, {{$value->job_contact2}}</td>
	<td>{{$value->job_preference1}}</td>
	<td>{{$value->job_preference2}}</td>
	<td>{{$value->job_location}}</td>
	<td>{{$value->job_salary1}} to {{$value->job_salary2}}</td>
	<td>{{$value->job_source}}</td>
	<tr>
	@endforeach
	</tbody>
</table>

</div>
<footer>
        <div class="pull-right">
            Design by Ramesh Dahal</a>
        </div>
        <div class="clearfix"></div>
</footer>
    </div>
    </div>
    <script src="{{url('public/bootstrap/js/jquery.min.js')}}"></script>
    <script src="{{url('public/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('public/bootstrap/js/fastclick.js')}}"></script>
    <script src="{{url('public/bootstrap/js/nprogress.js')}}"></script>
    <script src="{{url('public/bootstrap/js/bootstrap-wysiwyg.min.js')}}"></script>
    <script src="{{url('public/bootstrap/js/jquery.hotkeys.js')}}"></script>
    <script src="{{url('public/bootstrap/js/prettify.js')}}"></script>
    <script src="{{url('public/bootstrap/js/jquery.hotkeys.js')}}"></script>
    <script src="{{url('public/bootstrap/js/custom.min.js')}}"></script>
    <script src="{{url('public/bootstrap/ckeditor/ckeditor.js')}}"></script>
    <script src="{{url('public/bootstrap/js/custom.js')}}"></script>
</body>
</html>

