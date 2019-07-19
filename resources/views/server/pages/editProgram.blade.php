@extends($masterPath.'.master.master')

@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Edit Program</h2>
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
                                            @foreach($projectData as $project)
                                            @if($project->id == $updateProgram->project_id)
                                                <option value="{{$project->id}}">{{$project->project_name}}</option>
                                                @endif
                                            @endforeach
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
                                            @foreach($tradeData as $training)
                                            @if($training->id == $updateProgram->trade_id)
                                                <option value="{{$training->id}}">{{$training->occupation_name}}</option>
                                                @endif
                                            @endforeach
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
                                            @foreach($districtData as $district)
                                            @if($district->id == $updateProgram->district_id)
                                                <option value="{{$district->id}}">{{$district->district_name}}</option>
                                                @endif
                                            @endforeach
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
                                                <option value="{{$updateProgram->training_level}}">{{$updateProgram->training_level}}</option>
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
                                            <option value="{{$updateProgram->training_duration}}">{{$updateProgram->training_duration}}</option>
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
                                            <label>Total</label>
                                            <input type="text" name="total" class="form-control col-md-7 col-xs-12" value="{{$updateProgram->total}}">

                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-3">
                                            <label>Male</label>
                                            <input type="text" name="male" class="form-control col-md-7 col-xs-12" value="{{$updateProgram->male}}" required="required">

                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-3">
                                            <label>female</label>
                                            <input type="text" name="female" class="form-control col-md-7 col-xs-12" value="{{$updateProgram->female}}" required="required">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Program Status
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name="status" class="form-control" id="status">
                                                <option value="{{$updateProgram->status}}">{{$updateProgram->status}}</option>
                                                <option value="completed">Completed</option>
                                                <option value="ongoing">Ongoing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Program Type
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="program_type" class="form-control" value="{{$updateProgram->program_type}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Program Year
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="year" class="form-control" value="{{$updateProgram->year}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button type="submit" class="btn btn-success">Update</button>
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