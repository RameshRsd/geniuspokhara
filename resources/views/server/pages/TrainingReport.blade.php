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
    <body>
        <div style="text-align:center; padding:20px;">
            <ul style="margin:auto; border:2px solid #f3f3f3; list-style:none; width:400px; padding:10px;">
                <li>
                    <h4>Report</h4>
                </li>
                <hr>
                <li>
                    <a href="{{route('eventReport')}}" class="btn btn-default btn-xs">Event Wise Trainee Report</a>
                </li>
                <li>
                    <a href="{{route('tradeReport')}}" class="btn btn-default btn-xs">Trade Wise Trainee Report</a>
                </li>
                <li>
                    <a href="{{route('venueReport')}}" class="btn btn-default btn-xs">Venue Wise Trainee Report</a>
                </li>
                <hr>
                <li>
                    <a href="{{route('admin')}}" class="btn btn-warning btn-xs">Back</a>
                </li>
            </ul>
            
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