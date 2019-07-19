@extends($masterPath.'.master.master')

@section('content')

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 left-sidebar">

                <h2>Staff Demand Form</h2>
                <hr>
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
                    <form action="{{route('createCompany')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group col-md-10 col-sm-10">
                            <input type="text" class="form-control" id="employer_name" name="employer_name" placeholder="if New Company then Insert Company Name // Already Create then left blank this section">
                        </div>
                        <div class="form-group col-sm-2 col-md-2">
                            <button type="submit" class="btn  btn-success">Create</button>
                        </div>
                    </form>
                    <form action="" method="post">
                        {{csrf_field()}}
                                    <!--<h4>Compulsory Information</h4>-->
                                <div class="form-group col-md-6">
                                    <label>Select Company <font color="#ff0000">*</font></label>
                                    <select name="employer_id" class="form-control">
                                        <option value="">[Select Company]</option>
                                        @foreach($employerData as $employer)
                                        <option value="{{$employer->id}}">{{$employer->employer_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="jobdemand_title">Job Title <font color="#ff0000">*</font></label>
                                    <input type="text" class="form-control" id="jobdemand_title" name="jobdemand_title" data-validation="required" data-validation-error-msg="Name is required">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="jobdemand_exp">Experience/Requirement<font color="#ff0000">*</font></label>
                                    <input type="text" class="form-control" id="jobdemand_exp" name="jobdemand_exp" data-validation="required" data-validation-error-msg="Name is required" >
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="jobdemand_edu">Education <font color="#ff0000">*</font></label>
                                    <input type="text" class="form-control" id="jobdemand_edu" name="jobdemand_edu" data-validation="required" data-validation-error-msg="Education is required">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="jobdemand_gender">Gender <font color="#ff0000">*</font></label>
                                    <select class="form-control" name="jobdemand_gender">
                                        <option value="">[Select Gender]</option>
                                        <option value="Both">Both</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="jobdemand_opening">Job Opening <font color="#ff0000">*</font></label>
                                    <input type="text" class="form-control" id="jobdemand_opening" name="jobdemand_opening" data-validation="required" data-validation-error-msg="Number is required">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="jobdemand_salary">Salary <font color="#ff0000">*</font></label>
                                    <input type="text" class="form-control" id="jobdemand_salary" name="jobdemand_salary" data-validation="required" data-validation-error-msg="Salary is required">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Job Location <font color="#ff0000">*</font></label>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <select class="form-control" id="jobdemand_district" name="jobdemand_district" data-validation="required" data-validation-error-msg="District Name is required">
                                                <option value="">[Select District]</option>

                                                @foreach($districtData as $key=>$value)
                                                    <option value="{{$value->district_name}}">{{$value->district_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="jobdemand_location" name="jobdemand_location" data-validation="required" data-validation-error-msg="Location is required" placeholder="Location">
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Responsible Person <font color="#ff0000">*</font></label>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="jobdemand_responsible" name="jobdemand_responsible" data-validation="required" data-validation-error-msg="Location is required" placeholder="Name of Responsible">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="jobdemand_contact" name="jobdemand_contact" data-validation="required" data-validation-error-msg="Location is required" placeholder="Contact Number">
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <!--<div class="col-sm-12 col-xs-12">-->
                                <!--<hr>-->
                                <!--    <h4>Optional Information</h4>-->
                                <!--    <div class="form-group">-->
                                <!--        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="des">Job Specification-->
                                <!--        </label>-->
                                <!--        <div class="col-md-12 col-sm-12 col-xs-12">-->
                                <!--        <textarea class="content" name="jobdemand_spec" id="jobdemand_spec" cols="50" rows="10"></textarea>-->
                                            
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--    <div class="form-group">-->
                                <!--        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="des">Job Description-->
                                <!--        </label>-->
                                <!--        <div class="col-md-12 col-sm-12 col-xs-12">-->
                                <!--        <textarea class="content" name="jobdemand_desc" id="jobdemand_desc" cols="50" rows="10"></textarea>-->
                                            
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--    <div class="form-group">-->
                                <!--        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="des">How To Apply-->
                                <!--        </label>-->
                                <!--        <div class="col-md-12 col-sm-12 col-xs-12">-->
                                <!--            <input type="text" class="form-control" id="jobdemand_apply" name="jobdemand_apply">-->
                                            
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
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