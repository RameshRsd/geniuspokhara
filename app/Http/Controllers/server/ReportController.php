<?php

namespace App\Http\Controllers\server;
use App\Contact;
use App\Trainee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends ServerController
{
    public function Report(){
            $this->data('searchData',Trainee::all());
            $this->data('title',$this->title('Training Report'));
            return view($this->pagePath.'TrainingReport',$this->data);
    }
    public function eventReport(){
            $this->data('searchData',Trainee::all());
            $this->data('title',$this->title('Event Wise Trainee Report'));
            return view($this->pagePath.'eventReport',$this->data);
    }
    public function tradeReport(Request $request){
        if($request->isMethod('get')){
            $this->data('searchData',Trainee::all());
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('title',$this->title('Trade Wise Trainee Report'));
            return view($this->pagePath.'tradeReport',$this->data);
        }
        if($request->isMethod('post')){
           if($data=$request->training) {
          $searchData=Trainee::where('training', 'LIKE', "%$data%")
              ->orderBy('name')->paginate(1000);
            $this->data('searchData',$searchData);
            $this->data('viewMessage',Contact::paginate(5));
            return view($this->pagePath.'tradeReport',$this->data);
           }
            $this->data('searchData',Trainee::all());
            $this->data('viewMessage',Contact::paginate(5));
            return view($this->pagePath.'tradeReport',$this->data);

        }
    }
    public function venueReport(){
            $this->data('searchData',Trainee::all());
            $this->data('title',$this->title('Venue Wise Trainee Report'));
            return view($this->pagePath.'venueReport',$this->data);
    }
}
