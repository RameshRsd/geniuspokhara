@section('header')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{url('public/logo.png')}}">
    @if(isset($title))
    <title>@yield('title',$title)</title>
    <meta property="og:title" content="@yield('title',$title)" />
    @else
        <title>Genius Mutli Technical Institute Pvt. Ltd. - Training & Employment Service Provider</title>
        @endif
    @if(isset($description))
    <meta property="og:description" content="@yield('description',$description)">
    <meta property="og:image" content="{{url('public/images/news')}}/@yield('image',$image)"/>
    @else
        @endif

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/price-range.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/main.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/custom.css')}}">

    <!-- Start Responsive Slider HEAD section -->
    <link rel="stylesheet" type="text/css" href="{{url('public/wow/engine1/style.css')}}" />
    <script type="text/javascript" src="{{url('public/wow/engine1/jquery.js')}}"></script>
    <!-- End Responsive Slider HEAD section -->

</head>
<body>

@endsection

