<?php

namespace App\Http\Controllers\server;

use App\JobApplication;
use App\Contact;
use App\NepalDistrict;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobApplicationController extends ServerController
{
    public function viewJobApplication(Request $request){
        if($request->isMethod('get')) {
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('districtData',NepalDistrict::all());
            $this->data('jobApplication',JobApplication::paginate(20));
            $this->data('title',$this->title('Job Application Details'));

            return view($this->pagePath.'viewJobApplication',$this->data);
        }
        if($request->isMethod('post')) {

            $jobApplication = JobApplication::orderBy('id','DESC');
            if (\request('searchGender')){
                $jobApplication->where('job_gender','like','%'.\request('searchGender').'%');
            }
            if (\request('searchDistrict')){
                $jobApplication->where('job_district','like','%'.\request('searchDistrict').'%');
            }
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('districtData',NepalDistrict::all());
            $jobApplication = $jobApplication->paginate(100);
            return view($this->pagePath.'viewJobApplication',compact('jobApplication','categories'),$this->data);
        }
    }
    public function viewJobApplicationDetails($id)
    {
        $this->data('viewMessage',Contact::paginate(5));
        $this->data('jobApplication',JobApplication::findOrFail($id));
        return view($this->pagePath.'viewJobApplicationDetails',$this->data);
    }
    public function destroy($id)
    {
        $jobApplication = JobApplication::findOrFail($id);

        $jobApplication->delete();

        return redirect()->route('viewJobApplication')->with('success', 'Job Applicantion Record Deleted');

    }
    public function jobPrint()
    {
            $this->data('jobApplication',JobApplication::all());
            $this->data('title',$this->title('Job Application Details'));

            return view($this->pagePath.'Report.jobPrint',$this->data);

    }

}
