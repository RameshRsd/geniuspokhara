<?php

namespace App\Http\Controllers\server;
use App\User;
use App\Trainee;
use App\Contact;
use App\TrainingCode;
use App\Vbst_Trainings;
use App\TrainingVenue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TraineeController extends ServerController
{

    public function addTrainee(Request $request){
        if($request->isMethod('get')){
            $this->data('userData', User::all());
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('trainingCode',TrainingCode::all());
            $this->data('title',$this->title('Trainee Status'));
            return view($this->pagePath.'addTrainee',$this->data);
        }

        if ($request->isMethod('post')) {
            
            $this->validate($request, [
                'ctzn_number' => 'required|unique:trainees,ctzn_number',
                'token_number' => 'required|unique:trainees,token_number',


            ]);


        }

        $data['name'] = $request->name;
        $data['ctzn_number'] = $request->ctzn_number;
        $data['gender'] = $request->gender;
        $data['token_number'] = $request->token_number;
        $data['voucher_appeared'] = $request->voucher_appeared;
        $data ['organization'] = $request->organization;
        $data['phone_number1'] = $request->phone_number1;
        $data['phone_number2'] = $request->phone_number2;
        $data['training'] = $request->training;
        $data['training_event'] = $request->training_event;
        $data['trainee_status'] = $request->trainee_status;
        $data['location'] = $request->location;
        $data['year'] = $request->year;
        if (Trainee::create($data)) {
            
            return redirect()->route('addTrainee')->with('success', 'Trainee was inserted successfully');
        }

    }

    public function destroy($id)
    {
        $viewTrainee = Trainee::findOrFail($id);

        $viewTrainee->delete();

        return redirect()->route('searchEvent')->with('success', 'Trainee Record Deleted');

    }
    public function editTrainee($id)
    {
        $this->data('userData', User::all());
        $this->data('viewMessage',Contact::paginate(5));
        $this->data('viewTrainee',Trainee::findOrFail($id));
            $this->data('trainingCode',TrainingCode::all());
        return view($this->pagePath.'editTrainee',$this->data);
    }
    public function updateTrainee(Request $request, $id)
    {
        $this->validate(\request(),[
            'ctzn_number' => 'required'.$request->get('id'),
            'token_number' => 'required'.$request->get('id'),
        ]);
        $trainee = Trainee::findOrFail($id);
        $requestData = \request()->all();
        $trainee->update($requestData);
        return redirect()->route('searchEvent')->with('success', 'Trainee Record Updated');
    }

    public function viewTrainee(){
        $this->data('userData', User::all());
        $this->data('viewMessage',Contact::paginate(5));
        $this->data('viewTrainee',Trainee::all());
        $this->data('title',$this->title('viewTrainee'));

        return view($this->pagePath.'viewTrainee',$this->data);
    }
    public function searchEvent(Request $request)
    {

        if($request->isMethod('get')){
            $this->data('userData', User::all());
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('searchData',Trainee::all());
            $this->data('vbstTraining',Vbst_Trainings::all());
            $this->data('trainingVenue',TrainingVenue::all());
            $this->data('trainingCode',TrainingCode::all());
            return view($this->pagePath.'searchEvent',$this->data);
        }
        if($request->isMethod('post')){

            $searchData = Trainee::orderBy('training_event');
            if (\request('searchToken')){
                $searchData->where('token_number','like','%'.\request('searchToken').'%');
            }
            if (\request('searchCitizenship')){
                $searchData->where('ctzn_number','like','%'.\request('searchCitizenship').'%');
            }
            if (\request('searchName')){
                $searchData->where('name','like','%'.\request('searchName').'%');
            }
            if (\request('searchTraining')){
                $searchData->where('training','like','%'.\request('searchTraining').'%');
            }
            if (\request('organization')){
                $searchData->where('organization',\request('organization'));
            }
            if (\request('searchVenue')){
                $searchData->where('location',\request('searchVenue'));
            }
            if (\request('searchYear')){
                $searchData->where('year',\request('searchYear'));
            }
            if (\request('searchMela')){
                $searchData->where('voucher_appeared',\request('searchMela'));
            }
            if (\request('searchEvent')){
                $searchData->where('training_event',\request('searchEvent'));
            }
            
            if (\request('searchGender')){
                $searchData->where('gender',\request('searchGender'));
            }
            $this->data('userData', User::all());
            $this->data('trainingCode',TrainingCode::all());
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('vbstTraining',Vbst_Trainings::all());
            $this->data('trainingVenue',TrainingVenue::all());
            $searchData = $searchData->paginate(500);
            return view($this->pagePath.'TraineeReport',compact('searchData','categories'),$this->data);

        }

    }

}
