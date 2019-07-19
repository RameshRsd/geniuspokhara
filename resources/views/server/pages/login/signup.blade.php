<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Page || Genius Service Nepal</title>
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

    <section class="login_content">
        <div class="Container" style="padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; width: 750px;">
            <div class="row">
                @if(session('error'))
                    <span class="alert alert-danger"> {{session('error')}}</span>
                @endif

                <form method="post" action="{{route('signup')}}"  data-parsley-validate method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                    {{csrf_field()}}
                    <h1>Sign Up</h1>
                    <hr>
                    <div class="col-sm-4 col-sm-offset-4">
                        <label for="image">Profile Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                        <div class="clearfix"></div>
                    <div class="col-sm-6">
                        <label for="name">Full Name *</label>
                        <input type="text" name="name" class="form-control" placeholder="name" required="" />
                    </div>
                    <div class="col-sm-6">
                        <label for="email">Email *</label>
                        <input type="email" name="email" class="form-control" placeholder="Insert Your Valid Email" required="" />
                    </div>
                    <div class="col-sm-4">
                        <label for="username">User Name *</label>
                        <input type="username" name="username" class="form-control" placeholder="username" required="" />
                    </div>
                    <div class="col-sm-4">
                                        <label for="password">Password *
                                        </label>
                                            <input name="password" class="date-picker form-control"
                                                   type="password">
                                            {{$errors->first('password')}}
                    </div>
                    <div class="col-sm-4">
                                        <label for="password_confirmation">Confirmation Password *
                                        </label>
                                            <input name="password_confirmation"
                                                   class="date-picker form-control col-md-7 col-xs-12" type="password">
                                            {{$errors->first('confirmed')}}
                    </div>
                    <div class="clearfix"></div>
                    <div>
                        <button type="submit" class="btn btn-default">Sign Up</button>
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
            </div>
        </div>
    </section>
</div>
</body>
@endif
</html>