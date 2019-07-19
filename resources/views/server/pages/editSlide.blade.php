@extends($masterPath.'.master.master')

@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Slide Record Update</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>

                                <form action="" data-parsley-validate method="post"
                                      enctype="multipart/form-data" class="form-horizontal form-label-left">
                                    <table border="1" class="table table-bordered table-striped table-hover">
                                    {{csrf_field()}}
                                        <input type="hidden" name="user_id" value="{{$updateSlideData->user_id}}">
                                            <tr>
                                                <th>
                                                    <label for="title">Training Name</label>
                                                </th>
                                                <td>
                                                    <select name="trade_id" id="trade_id" class="form-control">
                                                        @foreach($tradeData as $tradeValue)
                                                            @if($updateSlideData->trade_id == $tradeValue->id)
                                                            <option value="{{$tradeValue->id}}">{{$tradeValue->occupation_name}}</option>
                                                        @else
                                                                @endif
                                                                @endforeach
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
                                                    <input type="text" name="training_location" value="{{$updateSlideData->training_location}}" class="form-control" id="training_location">
                                                </td>
                                            </tr>
                                        <tr>
                                            <th>
                                                <label for="training_photo">Image</label>
                                            </th>
                                            <td>
                                                <input type="file" name="training_photo" class="btn btn-default">
                                                <img src="{{url('public/images/Slide/'.$updateSlideData->training_photo)}}" alt=""  width="60">
                                            </td>
                                        </tr>
                                            <tr>
                                                <th>
                                                    <label for="title">Project/Sponser</label>
                                                </th>
                                                <td>
                                                    <select name="project_id" id="project_id" class="form-control">
                                                        @foreach($ProjectData as $projectValue)
                                                            @if($updateSlideData->project_id == $projectValue->id)
                                                            <option value="{{$projectValue->id}}">{{$projectValue->project_name}}</option>
                                                            @else
                                                                @endif
                                                        @endforeach
                                                        @foreach($ProjectData as $projectValue)
                                                            <option value="{{$projectValue->id}}">{{$projectValue->project_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <span style="color:red;">Note: Project Not found? </span><a href="" target="_blank">click here</a> to add Project Details
                                                </td>
                                            </tr>
                                        <tr>
                                            <td colspan="2">
                                                <button type="submit" class="btn btn-success">Update</button>
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