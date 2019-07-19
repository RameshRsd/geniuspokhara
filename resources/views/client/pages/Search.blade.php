@extends($masterPath.'.master.master')

@section('content')

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-12 left-sidebar">
                    <h2>Select Category</h2>
                    <form action="{{url('Search')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group col-md-12">
                            <label for="name">Select Training</label>
                            <select class="form-control" name="searchData">
                                <option value="">[Select]</option>
                                @foreach($defaultData as $key=>$value)
                                <option value="{{$value->training_title}}">{{$value->training_title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="form-group  col-xs-offset-4  col-sm-4">
                                <button type="submit" class="btn  btn-success">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-9 col-xs-12 left-sidebar">
                    <div class="panel-group category-products" id="accordian">
                        <h2>Search Result</h2>
                        @if(count($searchData)>0)
                            <h4>Training Data || Total <span style="color:red; font-weight:bolder">{{count($searchData)}}</span> Training Details Found</h4>
                        @else
                        @endif

                        <table class="table-condensed table-bordered table-hover">
                            <thead>
                            <tr style="background-color:grey; color:#fff;">
                                <th>SN</th>
                                <th>Training Name</th>
                                <th>Duration</th>
                                <th>Training Cost</th>
                                <th>Training Desc</th>
                            </tr>
                            </thead>
                            @if(count($searchData)>0)
                                <tbody>
                                @foreach($searchData as $key=>$value)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$value->training_title}}</td>
                                        <td>{{$value->training_duration}}</td>
                                        <td>{{$value->training_cost}}</td>
                                        <td>{{$value->training_content}}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                            @else
                                <tbody>
                                <tr>
                                    <td colspan="5"><h5 class="btn-danger" style="text-align:center;">data not found</h5></td>
                                </tr>
                                </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection