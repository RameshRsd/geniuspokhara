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
                                <h2>Front Menu => About Us Configure</h2>
                                <div class="clearfix"></div>

                            </div>
                            <div class="x_content">
                                <table border="1" style="margin-bottom:30px; max-width:100%;" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    @foreach($aboutData as $value)
                                    <tr>
                                        <th>Introduction <a href="{{url('addAbout/'.$value->id.'/editIntro')}}" class="btn btn-success btn-xs">Edit</a></th>
                                    </tr>
                                        <tr>
                                            <td>{!! $value->introduction !!}</td>
                                        </tr>
                                    @endforeach
                                    </thead>
                                    <thead>
                                    <tr>
                                        <th>Mission & Vision <a href="{{url('addAbout/'.$value->id.'/editMission')}}" class="btn btn-success btn-xs">Edit</a></th>

                                    </tr>
                                    @foreach($aboutData as $value)
                                        <tr>
                                            <td>{!! $value->mission !!}</td>
                                        </tr>
                                    @endforeach
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection