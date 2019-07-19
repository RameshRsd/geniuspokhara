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
                                <h2>Add Program</h2>
                                <div class="clearfix"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>

                                <form action="" method="post"
                                      class="form-horizontal form-label-left">

                                    {{csrf_field()}}
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="project_id">Fund/Project *
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name="project_id" class="form-control">
                                                <option value="">[Select Project]</option>
                                            @foreach($projectData as $project)
                                            @if($project->project_name == 'Office Program')
                                                @else
                                                <option value="{{$project->id}}">{{$project->project_name}}</option>
                                                @endif
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="trade_id">Training Name *
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name="trade_id" class="form-control">
                                                <option value="">[Select Training]</option>
                                            @foreach($tradeData as $training)
                                            @if($training->occupation_name == 'Office Program')
                                                @else
                                                <option value="{{$training->id}}">{{$training->occupation_name}}</option>
                                                @endif
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="training_title">Training District *
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name="district_id" class="form-control">
                                                <option value="">[Select District]</option>
                                            @foreach($districtData as $district)
                                                <option value="{{$district->id}}">{{$district->district_name}}</option>
                                            @endforeach
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
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="training_duration">Program Duration
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
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="total">Total Trainee
                                        </label>
                                        <div class="col-md-2 col-sm-2 col-xs-3">
                                            <input type="text" name="total" class="form-control col-md-7 col-xs-12" placeholder="Total">

                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-3">
                                            <input type="text" name="male" class="form-control col-md-7 col-xs-12" placeholder="Male" required="required">

                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-3">
                                            <input type="text" name="female" class="form-control col-md-7 col-xs-12" placeholder="Female" required="required">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Program Status
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name="status" class="form-control" id="status">
                                                <option value="">[Select]</option>
                                                <option value="completed">Completed</option>
                                                <option value="ongoing">Ongoing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Program Type
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="program_type" class="form-control" placeholder="Ex. Voucher Based/Result Based">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Program Year
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="year" class="form-control" placeholder="Ex. 2010-2012">
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
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>List of Program</h2>
                                <div class="clearfix"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table border="1" style="margin-bottom:30px; max-width:100%;" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Training Name</th>
                                        <th>Training Location</th>
                                        <th>Training Level</th>
                                        <th>Program Type</th>
                                        <th>Project</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($ProgramData)>0)
                                        @foreach($ProgramData as $key=>$Value)
                                    <tr>
                                        <td>{{++$key}}</td>
                                            @foreach($tradeData as $training)
                                                @if($training->id == $Value->trade_id)
                                                <td>{{$training->occupation_name}}</td>
                                                @else
                                                @endif
                                            @endforeach
                                            
                                            @foreach($districtData as $district)
                                                @if($district->id == $Value->district_id)
                                                <td>{{$district->district_name}}</td>
                                                @else
                                                @endif
                                            @endforeach
                                            
                                        <td>{{$Value->training_level}}</td>
                                        <td>{{$Value->program_type}}</td>
                                        <td>
                                            @foreach($projectData as $project)
                                                @if($project->id == $Value->project_id)
                                                    {{$project->project_name}}
                                                @else
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @if($Value->status == 'completed')
                                            <i class="btn btn-success btn-xs" style="margin-right:0;">Completed</i><i class="btn btn-danger btn-xs" style="margin:0 padding:5px;">{{$Value->year}}</i>
                                            @else
                                            <i class="btn btn-warning btn-xs" style="margin-right:0;">On Going</i><i class="btn btn-danger btn-xs" style="margin:0 padding:5px;">{{$Value->year}}</i>
                                            @endif
                                        </td>
                                        <td>{{$Value->total}}</td>
                                        <td>
                                            <a href="{{url('addProgram/'.$Value->id.'/editProgram')}}" class="btn btn-info btn-xs">Edit</a>
                                            <a href="{{url('addProgram/delete/'.$Value->id)}}"  onclick="return confirm('Are you sure you want to delete this Record?');" class="btn btn-danger btn-xs">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                        @else
                                        <tr style="text-align: center; color:red;">
                                            <td colspan="9">Record Not Found</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                                {{$ProgramData->links()}}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection