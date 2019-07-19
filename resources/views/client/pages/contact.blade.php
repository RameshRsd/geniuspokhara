@extends($masterPath.'.master.master')

@section('content')

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                <h4 style="margin-top:20px;">Leave Message</h4>
                    <hr>
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
                    <form action="{{url('contact')}}" method="post">
                        {{csrf_field()}}
                        <div class="">
                                <div class="form-group col-md-12">
                                    <label for="name">Name <font color="#ff0000">*</font></label>
                                    <input type="text" class="form-control" id="name" name="name" data-validation="required" data-validation-error-msg="Name is required" placeholder="Insert your name">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="contact">Contact Number <font color="#ff0000">*</font></label>
                                    <input type="text" class="form-control" id="contact" name="contact" value="" placeholder="Insert Your Contact Number">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control " id="email" name="email" placeholder="Insert your valid email address">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="des">Message <font color="#ff0000">*</font></label>
                                    <textarea name="message"  class="form-control"  id="description" cols="30" rows="10"  placeholder="Drop your messages"></textarea>
                                </div>

                                <div class="row">
                                    <div class="form-group  col-xs-offset-4  col-sm-4">
                                        <button type="submit" class="btn  btn-login green">Send</button>
                                        <button type="reset" class="btn  btn-login red">Reset</button>
                                    </div>
                                </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4">
                    <div class="contact-sec" style="padding:0 10px; margin-top:10px;">
                        <h4  style="margin-top:20px;">Contact Information</h4>
                        <hr>
                        <p><i class="fa fa-map-marker"></i> Pokhara Lekhnath Metropolitan City-10, Kaski, Nepal</p>
                        <p><i class="fa fa-phone"></i> +977 61 532658</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> gmti.pokhara@gmail.com</p>
                    </div>
                </div>
            </div>
        {{--</div>--}}
        {{--<div class="container">--}}
            {{--<div  style="margin:20px 0;">--}}
                <div class="col-md-8 col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.0879191271056!2d83.99875045465676!3d28.20464130577156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595c92309aaed%3A0xec24bc36862606c1!2sGenius+Multi+Technical+Institute+Pvt.Ltd.!5e0!3m2!1sen!2snp!4v1531034976141" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                </div>
                <div class="col-md-4 col-xs-12">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgmti.pkr&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
            {{--</div>--}}
        </div>
    </section>



@endsection