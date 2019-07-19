@extends($masterPath.'.master.master')

@section('content')
        <div class="main_container" style="padding:20px 0;">
        <div class="right_col" role="main">
            <div class="row">
                <h4>Trade wise trainee report</h4>
                <hr>
                <div class="col-sm-6 col-md-6 col-xs-12" style="border:1px solid #f3f3f3; background-color:#fff; padding:10px;>
                <div class="x_content">
                <form action="" method="post"">
                    {{csrf_field()}}
                    <div class="col-md-4">
                    <div class="form-group">
                    <label for="training">Select Training</label>
                    <select name="training" id="" class="form-control">
                        <option value="">[Select]</option>
                        <option value="Beautician">Beautician</option>
                        <option value="Tailoring">Tailoring</option>
                        <option value="Building Electrician	">Building Electrician	</option>
                        <option value="Junior Plumber">Junior Plumber</option>
                    </select>
                    </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="col-md-2">
                     <div class="form-group">
                    <button type="submit" class="btn btn-default" >Search</button>
                    </div>
                    </div>
                </form>
                </div>
                </div>
            </div>
            </div>
@endsection