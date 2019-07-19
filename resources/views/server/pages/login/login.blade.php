<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page || Genius Service Nepal</title>
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
                <form method="post" action="{{route('login')}}">
                    {{csrf_field()}}
                    <h1>Login To Dashboard</h1>
                    <div>
                        <input type="text" name="username" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default">Log in</button>
                        <a class="reset_pass" href="tel:9856065444">Lost your password? Contact: 9856065444</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <p>©{{date('Y')}} All Rights Reserved. Genius Multi Technical Institute  </p>
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