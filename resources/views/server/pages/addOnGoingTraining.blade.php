@extends($masterPath.'.master.master')

@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">

                    @if(session('success'))
                        <span class="alert alert-success"> {{session('success')}}</span>
                    @endif
                    @if($errors->any())
                         <ul  class="alert alert-danger">
                             @foreach($errors->all() as $error)
                             <li>{{$error}}</li>
                                 @endforeach
                         </ul>
                    @endif
                    <hr>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Slide Record Form</h2>
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

                                <form action="{{route('addOnGoingTraining')}}" data-parsley-validate method="post"
                                      enctype="multipart/form-data" class="form-horizontal form-label-left">

                                    {{csrf_field()}}
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <div class="form-group">
                                        <label for="training_name">Training Name</label>
                                        <input type="text" name="training_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="training_photo">Image</label>
                                        <input type="file" name="training_photo" class="btn btn-default">
                                    </div>
                                    <div class="form-group">
                                        <label for="training_location">Training Location</label>
                                        <input type="text" name="training_location" class="form-control" id="training_location">
                                    </div>
                                    <div class="form-group">

                                            <button type="submit" class="btn btn-success">Submit</button>
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