@extends($masterPath.'.master.master')

@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <h4>Search Trainee</h4>
                    @if(session('success'))
                        <span class="alert alert-success"> {{session('success')}}</span>
                    @endif
                    @if($errors->any())
                        <ul  class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                        <hr>
                    @endif

                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content">
                                <form action="{{route('searchEvent')}}" method="post">
                                    {{csrf_field()}}
                                <div class="col-md-6 col-sm-6 col-xs-12" style="border:solid 1px #D9DEE4; background-color:#FAFAFA;">
								<h5 style="text-align:center; color:#B45F04; font-weight:bolder;">Search By Trainee Info</h5>
								<hr>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="searchToken">Token No.</label>
                                        <input type="text" name="searchToken" id="searchToken" class="form-control"
                                               placeholder="Token No">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="searchCitizenship">Citizenship No.</label>
                                        <input type="text" name="searchCitizenship" id="searchCitizenship" class="form-control"
                                               placeholder="Citizenship No.">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="searchName">Trainee Name</label>
                                        <input type="text" name="searchName" id="searchName" class="form-control"
                                               placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                                <label for="searchGender">Select Gender</label>
                                                <select name="searchGender" id="searchGender" class="form-control">
                                                    <option value="">[Select Gender]</option>
                                                    
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                    </div>
                                </div>
                                </div>    
                                <div class="col-md-6 col-sm-6 col-xs-12" style="border:solid 1px #D9DEE4; background-color:#FBEFFB">
								<h5 style="text-align:center; color:#B45F04; font-weight:bolder;">Search By Training Info</h5>
								<hr>
                                <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="searchEvent">Select Training Code</label>
                                            <select name="searchEvent" id="searchEvent" class="form-control">
                                                <option value="">[Select Code]</option>
                                                @foreach($trainingCode as $key=>$value)
                                                    <option value="{{$value->training_code}}">{{$value->training_code}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="searchTraining">Select Training</label>
                                            <select name="searchTraining" id="searchTraining" class="form-control">
                                                <option value="">[Select Training]</option>
                                                @foreach($vbstTraining as $key=>$value)
                                                <option value="{{$value->training_name}}">{{$value->training_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                                <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="searchVenue">Select Venue</label>
                                            <select name="searchVenue" id="searchVenue" class="form-control">
                                                <option value="">[Select Venue]</option>
                                                @foreach($trainingVenue as $key=>$value)
                                                <option value="{{$value->trainingVenue}}">{{$value->district_id}}, {{$value->trainingVenue}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                                <!--<div class="col-sm-6">-->
                                <!--    <div class="form-group">-->
                                <!--                <label for="searchMela">Mela Status</label>-->
                                <!--                <select name="searchMela" id="searchMela" class="form-control">-->
                                <!--                    <option value="">[Select Status]</option>-->
                                                    
                                <!--                    <option value="Appeared">Appeared</option>-->
                                <!--                    <option value="Not Appeared">Not Appeared</option>-->
                                <!--                </select>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                                <label for="organization">T & E <span style="color:Red;"><i>(Required for T&E)</i></span></label>
                            @if(\Illuminate\Support\Facades\Auth::user()->user_type =='admin')
                                                <select name="organization" id="organization" class="form-control">
                                                    <option value="">[Select T & E]</option>
                                                    <option="">Null</option>
                                    @foreach($userData as $key=>$value)
                                        <option value="{{$value->username}}">{{$value->username}}</option>
                                    @endforeach 
                                                </select>
                                                @else
                                                <select name="organization" id="organization" class="form-control" Required>
                                                    <option ="">[Select T & E]</option>
                                        <option value="{{Auth::user()->username}}">{{Auth::user()->username}}</option>
                                                    </select>
                                                @endif
                                    </div>
                                </div>
                                <!--<div class="col-sm-6">-->
                                <!--    <div class="form-group">-->
                                <!--                <label for="searchYear">Year</label>-->
                                <!--                <select name="searchYear" id="searchYear" class="form-control">-->
                                <!--                    <option value="">[Select Year]</option>-->
                                                    
                                <!--                    <option value="2018">2018</option>-->
                                <!--                    <option value="2019">2019</option>-->
                                <!--                    <option value="2020">2020</option>-->
                                <!--                    <option value="2021">2021</option>-->
                                <!--                    <option value="2022">2022</option>-->
                                <!--                </select>-->
                                <!--    </div>-->
                                <!--</div>-->
                                </div>    
                                
                                <div class="col-md-12" style="margin-top:10px;">
                                    <div class="form-group">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Search</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
<!--                            <div class="x_title">-->
<!--                                <hr>-->
<!--                                {{--<span> {{$count}} Job found </span>--}}-->
<!--                                @if(count($searchData)>0)-->
<!--                                <h2>Trainee Data || Total <span style="color:red; font-weight:bolder">{{count($searchData)}}</span> Trainee/Applicant Found</h2>-->
<!--                                @else-->
<!--                                @endif-->
<!--                                <ul class="nav navbar-right panel_toolbox">-->
<!--                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>-->
<!--                                    </li>-->
<!--                                    <li class="dropdown">-->
<!--                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>-->
<!--                                        <ul class="dropdown-menu" role="menu">-->
<!--                                            <li><a href="#">Settings 1</a>-->
<!--                                            </li>-->
<!--                                            <li><a href="#">Settings 2</a>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li><a class="close-link"><i class="fa fa-close"></i></a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <div class="clearfix"></div>-->
<!--                            </div>-->
<!--                            <div class="x_content">-->

<!--                                @if(count($searchData)>0)-->
<!--                                <table class="table-condensed table-bordered table-hover">-->
<!--                                    <thead>-->
<!--                                    <tr style="background-color:grey; color:#fff;">-->
<!--                                        <th>S.N</th>-->
<!--                                        <th>Applicant Name</th>-->
<!--                                        <th>Citizenship No.</th>-->
<!--                                        <th>Token No.</th>-->
<!--                                        <th>Mela Status</th>-->
<!--                                        <th>Gender</th>-->
<!--                                                                        @if(\Illuminate\Support\Facades\Auth::user()->user_type =='user')-->
<!--                                                                        @else-->
<!--                                        <th>Contact No.</th>-->
<!--                                        @endif-->
<!--                                        <th>Training</th>-->
<!--                                        <th>Event ID</th>-->
<!--                                        <th>Location</th>-->
<!--                                        <th>Status</th>-->
<!--                                                                        @if(\Illuminate\Support\Facades\Auth::user()->user_type =='user')-->
<!--                                                                        @else-->
<!--                                        <th>Action</th>-->
<!--                                        @endif-->
<!--                                        <th>T&E</th>-->
<!--                                        <th>Year</th>-->
<!--                                    </tr>-->
<!--                                    </thead>-->
<!--                                    <tbody>-->
<!--                                    @foreach($searchData as $key=>$value)-->
<!--                                    <tr>-->
<!--                                        <td>{{++$key}}</td>-->
<!--                                        <td>{{$value->name}}</td>-->
<!--                                        <td>{{$value->ctzn_number}}</td>-->
<!--                                        <td>{{$value->token_number}}</td>-->
<!--                                        @if($value->voucher_appeared == 'Not Appeared')-->
<!--                                        <td><span style="color:red; font-weight:bolder">{{$value->voucher_appeared}}</span></td>-->
<!--                                        @else-->
<!--                                        <td><span style="color:#0D953F; font-weight:bolder">{{$value->voucher_appeared}}</span></td>-->
<!--                                        @endif-->

<!--                                        <td>{{$value->gender}}</td>-->
<!--                                                                        @if(\Illuminate\Support\Facades\Auth::user()->user_type =='user')-->

<!--                                                                        @else-->
<!--                                            <td>{{$value->phone_number1}} {{$value->phone_number2}}-->
<!--                                            </td>@endif-->
<!--                                        @if($value->training == 'Un Verify')-->
<!--                                        <td><span style="color:red;">{{$value->training}}</span></td>-->
<!--                                        @else-->
<!--                                        <td>{{$value->training}}</td>-->
<!--                                        @endif-->
<!--                                        <td>{{$value->training_event}}</td>-->
                                        <!--<td>{{$value->location}}</td>-->
<!--                                        @if($value->location == 'Unknown')-->
<!--                                        <td><span style="color:red;">{{$value->location}}</span></td>-->
<!--                                        @else-->
<!--                                        <td>{{$value->location}}</td>-->
<!--                                        @endif-->
                                        <!--<td>{{$value->trainee_status}}</td>-->
<!--                                        @if($value->trainee_status == 'Selected')-->
<!--                                        <td><span style="color:#0D953F; font-weight:bolder">{{$value->trainee_status}}</span></td>-->
<!--                                        @else-->
<!--                                        <td style="color:#E52B0A; font-weight:bolder">{{$value->trainee_status}}</td>-->
<!--                                        @endif-->
<!--                                                                        @if(\Illuminate\Support\Facades\Auth::user()->user_type =='user')-->

<!--                                                                        @else-->
<!--                                            <td><a href="{{url('viewTrainee/'.$value->id.'/editTrainee')}}">Edit</a><span style="color:grey;"> | </span>-->
<!--                                            <a href="{{url('viewTrainee/delete/'.$value->id)}}" onclick="return confirm('Are you sure you want to delete this Trainee?');">Delete</a>-->
<!--                                            </td>-->
<!--@endif           -->
<!--                                        <td>{{$value->organization}}</td>-->
<!--                                        <td>{{$value->year}}</td>-->
<!--                                    </tr>-->
<!--                                        @endforeach-->

<!--                                    </tbody>-->
<!--                                </table>-->
<!--                               {{--{{$searchData->links()}}--}}-->
<!--                                    @else-->
<!--                                <table class="table">-->
<!--                                    <thead>-->
<!--                                    <tr style="background-color:grey; color:#fff;">-->
<!--                                        <th>S.N</th>-->
<!--                                        <th>Applicant Name</th>-->
<!--                                        <th>Citizenship No.</th>-->
<!--                                        <th>Token No.</th>-->
<!--                                        <th>Gender</th>-->
<!--                                        <th>Contact No.</th>-->
<!--                                        <th>Training</th>-->
<!--                                        <th>Event ID</th>-->
<!--                                        <th>Location</th>-->
<!--                                        <th>Action</th>-->
<!--                                        <th>Year</th>-->
<!--                                    </tr>-->
<!--                                    </thead>-->
<!--                                    <tbody>-->
<!--                                    <tr>-->
<!--                                        <td colspan="11"><h2 class="btn-danger" style="text-align:center;">Sorry ! Your Query do not match, Try Again with valid data</h2></td>-->
<!--                                    </tr>-->
<!--                                    </tbody>-->
<!--                                </table>-->
<!--                                    @endif-->


<!--                            </div>-->
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection