<?php

namespace App\Http\Controllers\server;

use App\Contact;
use App\Trainings;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TrainingsController extends ServerController
{

    public function addTraining(Request $request){
        if($request->isMethod('get')){
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('userData', User::all());
            $this->data('TrainingData', Trainings::paginate(5));
            $this->data('title',$this->title('add Training Details'));
            return view($this->pagePath.'addTraining',$this->data);
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'training_title' => 'required',
                'training_level' => 'required',
                'training_banner' => 'required',

            ]);
            


            if (($request->hasFile('training_banner'))) {
                $image = $request->file('training_banner');
                $ext = $image->getClientOriginalExtension();

                $imageName = (microtime()) . '.' . $ext;
                $uploadPath = public_path('images/training/');
                if ($image->move($uploadPath, $imageName)) {
                    $data['training_banner'] = $imageName;
                }
            }

            $data['training_title'] = $request->training_title;
            $data['user_id'] = $request->user_id;
            $data['training_content'] = $request->training_content;
            $data['training_level'] = $request->training_level;
            $data['training_duration'] = $request->training_duration;
            $data['training_cost'] = $request->training_cost;
                    if (Trainings::create($data)) {
                return redirect()->route('addTraining')->with('success', 'Training details inserted successfully');
            }

        }

    }
    public function destroy($id)
    {
        $addTraining = Trainings::findOrFail($id);

        $addTraining->delete();

        return redirect()->route('addTraining')->with('success', 'Record Deleted');

    }
    }
