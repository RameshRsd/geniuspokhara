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
                                <h2>List of Recomonded Training</h2>
                                <div class="clearfix"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table border="1" style="margin-bottom:30px; max-width:100%;" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Training Name</th>
                                        <th>Training Duration</th>
                                        <th>Training Cost</th>
                                        <th>Image</th>
                                        <th>Publish By</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($TrainingData)>0)
                                        @foreach($TrainingData as $key=>$Value)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$Value->training_title}}</td>
                                        <td>{{$Value->training_duration}}</td>
                                        <td>{{$Value->training_cost}}</td>
                                        <td><img src="{{url('public/images/training/'.$Value->training_banner)}}" alt="Image Not Found" width="60"></td>
                                        <td>
                                            @foreach($userData as $users)
                                                @if($users->id == $Value->user_id)
                                                    {{$users->name}}
                                                @else
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-info btn-xs">Edit</a>
                                            <a href="{{url('addTraining/delete/'.$Value->id)}}"  onclick="return confirm('Are you sure you want to delete this Record?');" class="btn btn-danger btn-xs">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                        @else
                                        <tr style="text-align: center; color:red;">
                                            <td colspan="7">Record Not Found</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                                {{$TrainingData->links()}}
                            </div>
                        </div>
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add Recomonded Training</h2>
                                <div class="clearfix"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>

                                <form action="{{route('addTraining')}}" data-parsley-validate method="post"
                                      enctype="multipart/form-data" class="form-horizontal form-label-left">

                                    {{csrf_field()}}
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="training_title">Training Name *
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="training_title" class="form-control col-md-7 col-xs-12">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="training_content">Content*
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea type="text" name="training_content" class="form-control col-md-7 col-xs-12"></textarea>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="training_duration">Training Duration
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name="training_duration" class="form-control col-md-7 col-xs-12">
                                            <option value="">[Select]</option>
                                            <option value="7 Days">7 Days</option>
                                            <option value="10 Days">10 Days</option>
                                            <option value="15 Days">15 Days</option>
                                            <option value="1 Month">1 Month</option>
                                            <option value="3 Month">3 Month</option>
                                            <option value="6 Month">6 Month</option>
                                            <option value="1 Year">1 Year</option>
                                            <option value="15 Month">15 Month</option>
                                            <option value="3 Year">3 Year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="training_duration">Training Level
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name="training_level" class="form-control" id="training_level">
                                                <option value="">[Select]</option>
                                                <option value="Level-1">Level-1</option>
                                                <option value="Level-2">Level-2</option>
                                                <option value="Level-3">Level-3</option>
                                                <option value="TSLC">TSLC</option>
                                                <option value="Diploma">Diploma</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="training_cost">Training Cost
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="training_cost" class="form-control col-md-7 col-xs-12">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Training Banner</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control col-md-7 col-xs-12" type="file" name="training_banner">

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