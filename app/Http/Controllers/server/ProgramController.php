<?php

namespace App\Http\Controllers\server;

use App\Contact;
use App\Program;
use App\User;
use App\NepalDistrict;
use App\Project;
use App\Trade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProgramController extends ServerController
{

    public function addProgram(Request $request){
        if($request->isMethod('get')){
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('userData', User::all());
            $this->data('districtData', NepalDistrict::all());
            $this->data('projectData', Project::all());
            $this->data('tradeData', Trade::all());
            $this->data('ProgramData', Program::orderBy('id','DESC')->paginate(20));
            $this->data('title',$this->title('add Program Details'));
            return view($this->pagePath.'addProgram',$this->data);
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'project_id' => 'required',
                'trade_id' => 'required',
                'training_level' => 'required',
                'year' => 'required',

            ]);
            

            $data['project_id'] = $request->project_id;
            $data['user_id'] = $request->user_id;
            $data['trade_id'] = $request->trade_id;
            $data['district_id'] = $request->district_id;
            $data['training_level'] = $request->training_level;
            $data['training_duration'] = $request->training_duration;
            $data['program_type'] = $request->program_type;
            $data['male'] = $request->male;
            $data['female'] = $request->female;
            $data['total'] = $request->total;
            $data['status'] = $request->status;
            $data['year'] = $request->year;
                    if (Program::create($data)) {
                return redirect()->route('addProgram')->with('success', 'Program details inserted successfully');
            }

        }

    }
    
    public function editProgram($id)
    {
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('userData', User::all());
            $this->data('districtData', NepalDistrict::all());
            $this->data('projectData', Project::all());
            $this->data('tradeData', Trade::all());
        $this->data('updateProgram',Program::findOrFail($id));
            $this->data('title',$this->title('Edit Program Details'));
        return view($this->pagePath.'editProgram',$this->data);
    }

    public function updateProgram(Request $request, $id)
    {
        $Program = Program::findOrFail($id);
        $Program->user_id = \request('user_id');
        $Program->project_id = \request('project_id');
        $Program->trade_id = \request('trade_id');
        $Program->district_id = \request('district_id');
        $Program->training_level = \request('training_level');
        $Program->training_duration = \request('training_duration');
        $Program->program_type = \request('program_type');
        $Program->male = \request('male');
        $Program->female = \request('female');
        $Program->total = \request('total');
        $Program->status = \request('status');
        $Program->year = \request('year');

        $Program->save();
        return redirect()->route('addProgram')->with('success', 'Record Updated');
    }
    
    
    public function destroy($id)
    {
        $addProgram = Program::findOrFail($id);

        $addProgram->delete();

        return redirect()->route('addProgram')->with('success', 'Record Deleted');

    }
    }
