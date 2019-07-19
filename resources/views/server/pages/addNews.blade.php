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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>List of News Record</h2>
                                <div class="clearfix"></div>

                            </div>
                            <div class="x_content">
                                <table border="1" style="margin-bottom:30px; max-width:100%;" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Publish By</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($newsData)>0)
                                        @foreach($newsData as $key=>$Value)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$Value->news_title}}</td>
                                                <td><img src="{{url('public/images/news/'.$Value->news_photo)}}" alt="Image Not Found" width="60"></td>
                                                <td>
                                                    @foreach($userData as $users)
                                                        @if($users->id == $Value->user_id)
                                                            {{$users->name}}
                                                        @else
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a href="{{url('addNews/'.$Value->id.'/editNews')}}" class="btn btn-info btn-xs">Edit</a>
                                                    <a href="{{url('addNews/delete/'.$Value->id)}}"  onclick="return confirm('Are you sure you want to delete this Record?');" class="btn btn-danger btn-xs">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="7">Record Not Found</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>News Entry Form</h2>
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

                                <form action="{{route('addNews')}}" data-parsley-validate method="post"
                                      enctype="multipart/form-data" class="form-horizontal form-label-left">

                                    {{csrf_field()}}
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_title">News Title *
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="news_title" class="form-control col-md-7 col-xs-12">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="des">News Content*
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="content" name="news_description" id="description" cols="50" rows="10" data-validation="required" data-validation-error-msg="Content is required"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">News Banner</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control col-md-7 col-xs-12" type="file" name="news_photo">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
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