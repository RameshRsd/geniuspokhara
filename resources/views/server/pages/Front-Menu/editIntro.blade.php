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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Front Menu => About Us Update</h2>
                                <div class="clearfix"></div>

                            </div>
                            <div class="x_content">
                                <form action="" data-parsley-validate method="post" class="form-horizontal form-label-left">

                                    {{csrf_field()}}
                                <table border="1" style="margin-bottom:30px; max-width:100%;" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Introduction</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea class="content" name="introduction" id="description" cols="50" rows="10" data-validation="required" data-validation-error-msg="Content is required">{{$aboutData->introduction}}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <button type="submit">Update</button>
                                    </tr>
                                    </thead>
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