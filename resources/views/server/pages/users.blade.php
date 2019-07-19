@extends($masterPath.'.master.master')

@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <h1>Show Users</h1>

                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>User Data</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>S.n</th>
                                        <th>Name</th>
                                        <th>User name</th>
                                        <th>Email</th>
                                        <th>User Type</th>
                                        <th>Image</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($userData as $key=>$value)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->username}}</td>
                                        <td>{{$value->email}}</td>
                                        @if($value->user_type=='admin')
                                        <td><a href="" class="btn btn-success btn-xs">{{$value->user_type}}</a></td>
                                        @else
                                        <td><a href="" class="btn btn-warning btn-xs">{{$value->user_type}}</a></td>
                                        @endif
                                        @if((is_file($value->image) && file_exists(($value->image))))
                                        <td><img src="{{url('public/images/userimages/'.$value->image)}}" alt="image not found" width="30"></td>
                                        @else
                                            <td><img src="{{url('public/images/userimages/default.jpg')}}" alt="image not found" width="30"></td>
                                            @endif
                                        <td>{{$value->created_at}}</td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-xs">edit</a>
                                            <a href="" class="btn btn-danger btn-xs">delete</a>
                                        </td>
                                    </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                               {{$userData->links()}}

                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection