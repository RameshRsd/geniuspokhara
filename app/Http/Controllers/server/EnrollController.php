<?php

namespace App\Http\Controllers\server;

use App\Application_Form;
use App\Trainings;
use App\Contact;
use App\NepalDistrict;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnrollController extends ServerController
{
    public function viewApplication(Request $request){
        if($request->isMethod('get')) {
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('districtData',NepalDistrict::all());
            $this->data('trainingData', Trainings::all());
            $this->data('viewApplication',Application_Form::all());
            $this->data('title',$this->title('Application Details'));

            return view($this->pagePath.'viewApplication',$this->data);
        }
        if($request->isMethod('post')) {

            $viewApplication = Application_Form::orderBy('id','DESC');
            if (\request('searchApplicantData')){
                $viewApplication->where('training1','like','%'.\request('searchApplicantData').'%');
            }
            if (\request('searchGender')){
                $viewApplication->where('applicant_gender','like','%'.\request('searchGender').'%');
            }
            if (\request('searchDistrict')){
                $viewApplication->where('district','like','%'.\request('searchDistrict').'%');
            }
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('districtData',NepalDistrict::all());
            $this->data('trainingData', Trainings::all());
            $viewApplication = $viewApplication->paginate(500);
            return view($this->pagePath.'viewApplication',compact('viewApplication','categories'),$this->data);
        }
    }
    public function viewApplicationDetails($id)
    {
        $this->data('viewMessage',Contact::paginate(5));
        $this->data('viewApplication',Application_Form::findOrFail($id));
        return view($this->pagePath.'viewApplicationDetails',$this->data);
    }
    public function destroy($id)
    {
        $viewApplication = Application_Form::findOrFail($id);

        $viewApplication->delete();

        return redirect()->route('viewApplication')->with('success', 'Applicantion Record Deleted');

    }

}
