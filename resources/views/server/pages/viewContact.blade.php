
@extends($masterPath.'.master.master')
@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <h1>View Message</h1>
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
                                <br/>
                                <div class="col-md-2">
                                <tr>
                                    <th>Visitor ID :</th>
                                </tr>
                                <br>
                                <tr>
                                    <th>Visitor Name :</th>
                                </tr>
                                <br>
                                <tr>
                                    <th>Contact Number :</th>
                                </tr>
                                <br>
                                <tr>
                                    <th>Email :</th>
                                </tr>
                                <br>
                                <tr>
                                    <th>Message :</th>
                                </tr>
                                </div>
                                <div class="col-md-10">
                                    <tr>
                                        <td>{{$viewContact->id}}</td>
                                    </tr>
                                <br>
                                    <tr>
                                        <td>{{$viewContact->contact}}</td>
                                    </tr>
                                <br>
                                    <tr>
                                        <td>{{$viewContact->name}}</td>
                                    </tr>
                                <br>
                                    <tr>
                                        <td>{{$viewContact->email}}</td>
                                    </tr>
                                <br>
                                    <tr>
                                        <td>{{$viewContact->message}}</td>
                                    </tr>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <div style=" margin-top:30px;">
                                    <a href="{{route('Contact')}}" style="padding:10px 15px; background-color:#2A3F54; color:#fff;">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>

@endsection