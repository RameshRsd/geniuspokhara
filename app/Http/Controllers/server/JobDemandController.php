<?php

namespace App\Http\Controllers\server;

use App\JobApplication;
use App\StaffDemand;
use App\Placement;
use App\Contact;
use App\Employer;
use App\NepalDistrict;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobDemandController extends ServerController
{
    public function viewJobDemand(Request $request){
        if($request->isMethod('get')) {
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('districtData',NepalDistrict::all());
            $this->data('placementData',Placement::all());
            $this->data('jobDemand',StaffDemand::all());
            $this->data('employerData',Employer::all());
            $this->data('jobDemandDefault',StaffDemand::all());
            $this->data('title',$this->title('Job Demand Details'));

            return view($this->pagePath.'viewJobDemand',$this->data);
        }
        if($request->isMethod('post')) {

            $jobDemand = StaffDemand::orderBy('id','DESC');
            if (\request('searchCoy')){
                $jobDemand->where('employer_id',\request('searchCoy').'%');
            }
            if (\request('searchDistrict')){
                $jobDemand->where('jobdemand_district','like','%'.\request('searchDistrict').'%');
            }
            if (\request('searchLocation')){
                $jobDemand->where('jobdemand_location','like','%'.\request('searchLocation').'%');
            }
            if (\request('searchJob')){
                $jobDemand->where('jobdemand_title','like','%'.\request('searchJob').'%');
            }
            if (\request('searchStatus')){
                $jobDemand->where('demand_status','like','%'.\request('searchStatus').'%');
            }
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('districtData',NepalDistrict::all());
            $this->data('jobDemandDefault',StaffDemand::all());
            $this->data('employerData',Employer::all());
            $this->data('jobDemand',StaffDemand::all());
            $this->data('placementData',Placement::all());
            $jobDemand = $jobDemand->paginate(500);
            return view($this->pagePath.'viewJobDemand',compact('jobDemand','categories'),$this->data);
        }
    }
    public function viewJobDemandDetails($id)
    {
        $this->data('viewMessage',Contact::paginate(5));
        $this->data('placementData',Placement::all());
        $this->data('employerData',Employer::all());
        $this->data('jobDemand',StaffDemand::findOrFail($id));
        return view($this->pagePath.'viewJobDemandDetails',$this->data);
    }
    public function destroy($id)
    {
        $jobDemand = StaffDemand::findOrFail($id);

        $jobDemand->delete();

        return redirect()->route('viewJobDemand')->with('success', 'Job Demand Record Deleted');

    }
    public function editJobDemand($id)
    {
        $this->data('viewMessage',Contact::paginate(5));
        $this->data('districtData',NepalDistrict::all()); 
        $this->data('placementData',Placement::all());
        $this->data('employerData',Employer::all());
        $this->data('jobDemand',StaffDemand::findOrFail($id));
        return view($this->pagePath.'editJobDemand',$this->data);
    }
    public function updateJobDemand(Request $request, $id)
    {
        $trainee = StaffDemand::findOrFail($id);
        $requestData = \request()->all();
        $trainee->update($requestData);
        return redirect()->route('viewJobDemand')->with('success', 'Job Demand Record Updated');
    }

}
