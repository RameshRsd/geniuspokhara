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
                                <h2>List of Slide Record</h2>
                                <div class="clearfix"></div>

                            </div>
                            <div class="x_content">
                                <table border="1" style="margin-bottom:30px; max-width:100%;" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Training Name</th>
                                        <th>Venue</th>
                                        <th>Sponser</th>
                                        <th>Image</th>
                                        <th>Publish By</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($SlideData)>0)
                                        @foreach($SlideData as $key=>$slideValue)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>
                                                 @foreach($tradeData as $training)
                                                     @if($training->id == $slideValue->trade_id)
                                                    {{$training->occupation_name}}
                                                        @else
                                                         @endif
                                                @endforeach
                                                </td>
                                                <td>{{$slideValue->training_location}}</td>
                                                <td>
                                                    @foreach($ProjectData as $project)
                                                        @if($project->id == $slideValue->project_id)
                                                    {{$project->project_name}}
                                                        @else
                                                            @endif
                                                        @endforeach
                                                </td>
                                                <td><img src="{{url('public/images/Slide/'.$slideValue->training_photo)}}" alt="Image Not Found" width="60"></td>
                                                <td>
                                                    @foreach($userData as $users)
                                                    @if($users->id == $slideValue->user_id)
                                                    {{$users->name}}
                                                        @else
                                                    @endif
                                                        @endforeach
                                                </td>
                                                <td>
                                                    <a href="{{url('addSlide/'.$slideValue->id.'/editSlide')}}" class="btn btn-info btn-xs">Edit</a>
                                                    <a href="{{url('addSlide/delete/'.$slideValue->id)}}"  onclick="return confirm('Are you sure you want to delete this Record?');" class="btn btn-danger btn-xs">Delete</a>
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
                                <h2>Slide Record Form</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>

                                <form action="{{route('addSlide')}}" data-parsley-validate method="post"
                                      enctype="multipart/form-data" class="form-horizontal form-label-left">
                                    <table border="1" class="table table-bordered table-striped table-hover">
                                    {{csrf_field()}}
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                            <tr>
                                                <th>
                                                    <label for="title">Training Name</label>
                                                </th>
                                                <td>
                                                    <select name="trade_id" id="trade_id" class="form-control">
                                                        @foreach($tradeData as $tradeValue)
                                                        <option value="{{$tradeValue->id}}">{{$tradeValue->occupation_name}}</option>
                                                            @endforeach
                                                    </select>
                                                    <span style="color:red;">Note: Training Not found? </span><a href="" target="_blank">click here</a> to add training
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label for="des">Training Venue</label>
                                                </th>
                                                <td>
                                                    <input type="text" name="training_location" class="form-control" id="training_location">
                                                </td>
                                            </tr>
                                        <tr>
                                            <th>
                                                <label for="training_photo">Image</label>
                                            </th>
                                            <td>
                                                <input type="file" name="training_photo" class="btn btn-default">
                                            </td>
                                        </tr>
                                            <tr>
                                                <th>
                                                    <label for="title">Project/Sponser</label>
                                                </th>
                                                <td>
                                                    <select name="project_id" id="project_id" class="form-control">
                                                        @foreach($ProjectData as $projectValue)
                                                            <option value="{{$projectValue->id}}">{{$projectValue->project_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <span style="color:red;">Note: Project Not found? </span><a href="{{route('addProject')}}" target="_blank">click here</a> to add Project Details
                                                </td>
                                            </tr>
                                        <tr>
                                            <td colspan="2">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection