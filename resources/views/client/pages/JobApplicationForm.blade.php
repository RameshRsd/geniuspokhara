@extends($masterPath.'.master.master')

@section('content')

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 left-sidebar">

                <h2>Job Application Form</h2>
                    <div class="col-sm-12">
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
                    </div>
                    <form action="{{url('JobApplicationForm')}}" data-parsley-validate method="post"
                                      enctype="multipart/form-data">
                        {{csrf_field()}}
                        
                                <div class="form-group col-md-12">
                                        <input type="file" name="job_photo" class="btn btn-default">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="job_f_name">First Name <font color="#ff0000">*</font></label>
                                    <input type="text" class="form-control" id="job_f_name" name="job_f_name" data-validation="required" data-validation-error-msg="Name is required" placeholder="Insert your first name">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="job_l_name">Last Name <font color="#ff0000">*</font></label>
                                    <input type="text" class="form-control" id="job_l_name" name="job_l_name" data-validation="required" data-validation-error-msg="Name is required" placeholder="Insert your last name">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="job_gender">Gender</label>
                                    <select name="job_gender" id="job_gender" class="form-control">
                                        <option value="">[Select]</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="job_marital_status">Marital Status</label>
                                    <select name="job_marital_status" id="job_marital_status" class="form-control">
                                        <option value="">[Select]</option>
                                        <option value="Married">Married</option>
                                        <option value="Unmarried">Unmarried</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="job_birth_year">Birth Year</label>
                                    <input type="text" name="job_birth_year" id="job_birth_year" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Contact Number <font color="#ff0000">*</font></label>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="job_contact1" name="job_contact1" data-validation="required" data-validation-error-msg="Email is required" placeholder="Number (Own)">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="job_contact2" name="job_contact2" data-validation="required" data-validation-error-msg="Email is required" placeholder="Number (Family)">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Permanent Address <font color="#ff0000">*</font></label>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <select class="form-control" id="job_district" name="job_district" data-validation="required" data-validation-error-msg="District Name is required">
                                                <option value="">[Select District]</option>

                                                @foreach($districtData as $key=>$value)
                                                    <option value="{{$value->district_name}}">{{$value->district_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="job_address" name="job_address" data-validation="required" data-validation-error-msg="Current Location is required" placeholder="NP/MNP/GaunPalika-Ward">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="job_career">Career Plan (if any)</label>
                                    <textarea class="form-control" id="job_career" name="job_career" value="" placeholder="Please describe about your career plan"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="job_career">Expected Salary <font color="#ff0000">*</font></label>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="job_salary1" name="job_salary1" value="" placeholder="From">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="job_salary2" name="job_salary2" value="" placeholder="To">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="job_location">Prefered Job  Location</label>
                                    <input type="text" class="form-control" id="job_location" name="job_location" value="">
                                </div>
                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="job_preference1">1st Prefered Job</label>
                                    <input type="text" class="form-control" id="job_preference1" name="job_preference1" value="" placeholder="Ex. Graphic Designer/Accountant">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="job_preference2">2nd Prefered Job</label>
                                    <input type="text" class="form-control" id="job_preference2" name="job_preference2" value="" placeholder="Ex. Graphic Designer/Accountant">
                                </div>
                            </div>
                        </div>
                                <div class="form-group col-md-12">
                                    <label for="job_message">If you have any Query, Please let us know</label>
                                    <textarea name="job_message" class="form-control" id="job_message" cols="20" rows="10"  placeholder="Drop your messages"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="job_source">Reference (if any)</label>
                                    <input type="text" name="job_source" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="form-group  col-xs-offset-4  col-sm-4">
                                        <button type="submit" class="btn  btn-success">Submit</button>
                                    </div>
                                </div>
                    </form>
                </div>
                <div class="col-sm-4">
                    <div class="left-sidebar">
                        <h2>News Feed</h2>
                        <a></a>
                        <div class="panel-group category-products" id="accordian">

                            <!--Jobs-news feed-->
                            @foreach($newsData as $key=>$news)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a target="blank" href="{{$news->news_url}}">
                                            <div class="col-md-12">
                                                <img src="{{url('public/images/News/'.$news->news_banner)}}" class="img-responsive" alt=""  style="width:300px; height:120px; border:1px solid #f3f3f3; padding:5px;" />
                                            </div>
                                            <div class="col-md-12">
                                                <h6><b>{{$news->news_title}}</b>
                                                    <br>
                                                    <p>({{$news->news_content}})</p>
                                                </h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                        @endforeach
                        <!--/Jobs-news feed-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">recommended trainings</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($trainingData as $key=>$training)
                                    @if($key==0)
                                        <div class="item active">

                                            <div class="col-sm-12">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{url('public/images/training/'.$training->training_banner)}}" style="width:200px; height:150px; border:1px solid #f3f3f3; padding:5px;" alt="" />
                                                            <h4>{{$training->training_title}}</h4>
                                                            <a href="#" class="btn btn-default add-to-cart">Read more <i class="fa fa-fast-forward"></i></a>
                                                            <br><a href="application_form">Click here for online application form</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    @else
                                        <div class="item">
                                            <div class="col-sm-12">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{url('public/images/training/'.$training->training_banner)}}" style="width:200px; height:150px; border:1px solid #f3f3f3; padding:5px;" alt="" />
                                                            <h4>{{$training->training_title}}</h4>
                                                            <a href="#" class="btn btn-default add-to-cart">Read more <i class="fa fa-fast-forward"></i></a>
                                                            <br><a href="application_form">Click here for online application form</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div><!--/recommended_items-->
                </div>
                <div class="col-sm-8 col-xs-12 internship">
                    <h2 class="title text-center">Paid Internships and Job Placement</h2>
                    <ul>
                        <li>Appoint students to the respective counselor for “customized counseling” on an individual basis. Each individual is suggested an appropriate computer course and offered discrete career counseling with respect to national as well as international software market.</li>
                        <li>Begin professional and job-oriented computer training session.</li>
                        <li>Provide reliable and consistent supervision throughout the project development period and monitor students' performance, growth and progress.</li>
                        <li>Provide internship for dedicated and promising candidates at our computer institute and software companies in Kathmandu and provide job assistance, and placement services.</li>
                    </ul>
                    <p>Are You Searching for the best job ? <a href="https://sajhajob.com/" target="_blank"><span>Click here</span></a></p>
                </div>
            </div>
        </div>
    </section>

@endsection