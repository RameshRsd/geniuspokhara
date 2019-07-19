@extends($masterPath.'.master.master')

@section('content')

    <section class="contact" style="background-color: #eff0f1;">
        <div class="container">
            <div class="row">
                <div class="col-sm-9" style="margin-top:20px;">
                    <div style="padding:0 10px; border: 1px solid #c3c3c2; margin-bottom: 20px; background-color: #fff;">
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
                        <h5 class="title text-center">Apply Training</h5>
                        <hr>
                        <form action="{{url('application_form')}}" method="post">
                            {{csrf_field()}}
                            @if(\Illuminate\Support\Facades\Auth::user())
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            @else
                                <input type="hidden" name="user_id" value="0">
                                @endif
                            <div class="form-group col-md-3">
                                <label for="f_name">First Name <font color="#ff0000">*</font></label>
                                <input type="text" class="form-control" id="f_name" name="f_name" data-validation="required" data-validation-error-msg="Name is required" placeholder="Insert your first name">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="l_name">Last Name <font color="#ff0000">*</font></label>
                                <input type="text" class="form-control" id="l_name" name="l_name" data-validation="required" data-validation-error-msg="Name is required" placeholder="Insert your last name">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="applicant_gender">Gender</label>
                                <select name="applicant_gender" id="applicant_gender" class="form-control">
                                    <option value="">[Select]</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email Address <font color="#ff0000">*</font></label>
                                <input type="text" class="form-control" id="email" name="email" data-validation="required" data-validation-error-msg="Email is required" placeholder="Insert your valid email address">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="p_address">Permanent Address <font color="#ff0000">*</font></label>
                                <input type="text" class="form-control" id="p_address" name="p_address" data-validation="required" data-validation-error-msg="Address is required" placeholder="District and VDC/Municipality">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="">Temporary Address <font color="#ff0000">*</font></label>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <select class="form-control" id="district" name="district" data-validation="required" data-validation-error-msg="District Name is required">
                                            <option value="">[Select District]</option>

                                            @foreach($districtData as $key=>$value)
                                                <option value="{{$value->district_name}}">{{$value->district_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="location" name="location" data-validation="required" data-validation-error-msg="Current Location is required" placeholder="Current Location">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="mbl_number1">Contact Number (own)<font color="#ff0000">*</font></label>
                                <input type="text" class="form-control" id="mbl_number1" name="mbl_number1" value="" placeholder="Insert Your Contact Number">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="mbl_number2">Contact Number (Family)</label>
                                <input type="text" class="form-control" id="mbl_number2" name="mbl_number2" value="" placeholder="Insert Contact Number">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="training1">Recommended Training</label>
                                <select name="training1" id="training1" class="form-control">
                                    <option value="">[Select]</option>
                                    @foreach($trainingData as $key=>$training)
                                        <option value="{{$training->training_title}}">{{$training->training_title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="training2">Prefered Training</label>
                                <input type="text" class="form-control" id="training2" name="training2" value="" placeholder="Which training do you want ?">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="p_location">Prefered Training Location</label>
                                <input type="text" class="form-control" id="p_location" name="p_location" value="" placeholder="Which training location do you want ?">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="applicant_messages">If you have any Query, Please let us know</label>
                                <textarea name="applicant_messages" class="form-control" id="applicant_messages" cols="20" rows="10"  placeholder="Drop your messages"></textarea>
                            </div>
                            <div class="row">
                                <div class="form-group  col-xs-offset-4  col-sm-4">
                                    <button type="submit" class="btn  btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3" style="margin-top:20px;">
                    @include($masterPath.'.partials.training')
                </div>

            </div>
        </div>
    </section>

@endsection