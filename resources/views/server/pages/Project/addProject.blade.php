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
                                <h2>List of Project Record</h2>
                                <div class="clearfix"></div>

                            </div>
                            <div class="x_content">
                                <table border="1" style="margin-bottom:30px; max-width:100%;" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Project Name</th>
                                        <th>Address</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($projectData)>0)
                                        @foreach($projectData as $key=>$Value)
                                            @if($Value->project_name == 'Office Program')
                                                @else
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>
                                                    {{$Value->project_name}}
                                                </td>
                                                <td>{{$Value->project_address}}</td>
                                                <td>
                                                    {!! $Value->project_description !!}
                                                </td>
                                                <td>
                                                    @if($Value->project_status == 1)
                                                        <form action="{{url('addProject/'.$Value->id.'/updateProjectStatus')}}" method="post">
                                                            {{csrf_field()}}
                                                            <input type="hidden" value="0" name="project_status">
                                                            <button type="submit" class="btn btn-warning btn-xs">Ongoing</button><br>
                                                            <i>Click button to change status</i>
                                                        </form>
                                                        @else
                                                        <form action="{{url('addProject/'.$Value->id.'/updateProjectStatus')}}" method="post">
                                                            {{csrf_field()}}
                                                            <input type="hidden" value="1" name="project_status">
                                                            <button type="submit" class="btn btn-success btn-xs">Completed <span style="font-family: Symbol; padding:10px; margin:0;"></span></button><br>
                                                            <i>Click button to change status</i>
                                                        </form>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{url('addProject/'.$Value->id.'/editProject')}}" class="btn btn-info btn-xs">Edit</a>
                                                    <a href="{{url('addProject/delete/'.$Value->id)}}"  onclick="return confirm('Are you sure you want to delete this Record?');" class="btn btn-danger btn-xs">Delete</a>
                                                </td>
                                            </tr>
                                            @endif
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5">Record Not Found</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Project Record</h2>
                                <div class="clearfix"></div>

                            </div>
                            <div class="x_content">
                                <form action="{{route('addProject')}}" data-parsley-validate method="post"
                                      enctype="multipart/form-data" class="form-horizontal form-label-left">

                                    {{csrf_field()}}
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_title">Project Name *
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="project_name" class="form-control col-md-7 col-xs-12">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_title">Address *
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="project_address" class="form-control col-md-7 col-xs-12">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="des">Project Description*
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="content" name="project_description" id="description" cols="50" rows="10" data-validation="required" data-validation-error-msg="Content is required"></textarea>
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