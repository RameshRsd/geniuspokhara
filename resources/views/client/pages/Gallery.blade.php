@extends($masterPath.'.master.master')

@section('content')

    <section class="Gallery" style="background-color: #eff0f1;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <h4 style="margin-top:20px; border-bottom: 1px solid #d2d0d0; padding-bottom: 10px;">Gallery</h4>
                    @foreach($SlideData as $value)
                    <div class="col-sm-4 col-xs-12">
                        <div style="padding:10px; background-color: #fff; border: 1px solid #d2d0d0; margin-bottom: 10px;">
                            <img src="{{url('public/images/Slide/'.$value->training_photo)}}" style="width: 100%; height:160px;">
                            @foreach($tradeData as $training)
                                @if($training->id == $value->trade_id)
                                    <h2 style="font-size: 20px; color: #043c68;">{{$training->occupation_name}}</h2>
                                @else
                                @endif
                            @endforeach
                            <i class="fa fa-map-marker" aria-hidden="true"></i> {{$value->training_location}}<br>
                            @foreach($ProjectData as $project)
                                @if($project->id == $value->project_id)
                                    <i class="fa fa-gift" aria-hidden="true" style="color:Red;"> {{$project->project_name}}</i><br>
                                @else
                                @endif
                            @endforeach
                            @foreach($userData as $users)
                                @if($users->id == $value->user_id)
                                    <i style="color:Green;">Post By :</i> <span style="color:purple;">{{$users->name}}</span>
                                @else
                                @endif
                            @endforeach
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </section>



@endsection