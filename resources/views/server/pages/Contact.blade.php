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
                                <h2>Messages from visitor</h2>
                                <div class="clearfix"></div>

                            </div>
                            <div class="x_content">
                                <table border="1" style="margin-bottom:30px; max-width:100%;" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Contact No.</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($contactData)>0)
                                        @foreach($contactData as $key=>$contactValue)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$contactValue->name}}</td>
                                                <td>{{$contactValue->contact}}</td>
                                                <td>{{$contactValue->email}}</td>
                                                <td>{{$contactValue->message}}</td>
                                                <td>
                                                    <a href="" class="btn btn-info btn-xs">View</a>
                                                    <a href="" class="btn btn-danger btn-xs">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6">Record Not Found</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection