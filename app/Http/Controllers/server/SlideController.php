<?php

namespace App\Http\Controllers\server;

use App\User;
use App\Slide;
use App\Trade;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SlideController extends ServerController
{

    public function addSlide(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('userData', User::all());
            $this->data('tradeData', Trade::all());
            $this->data('SlideData', Slide::all());
            $this->data('ProjectData', Project::all());
            $this->data('title', $this->title('Slide Controll'));
            return view($this->pagePath . 'addSlide', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'trade_id' => 'required',
                'training_photo' => 'required',
                'training_location' => 'required',
                'project_id' => 'required',
            ]);


            if (($request->hasFile('training_photo'))) {
                $training_photo = $request->file('training_photo');
                $ext = $training_photo->getClientOriginalExtension();
                $imageName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('images/Slide/');
                if ($training_photo->move($uploadPath, $imageName)) {
                    $data['training_photo'] = $imageName;
                }


            }

            $data['user_id'] = $request->user_id;
            $data['trade_id'] = $request->trade_id;
            $data['training_location'] = $request->training_location;
            $data['project_id'] = ($request->project_id);

            if (Slide::create($data)) {
                $this->data('SlideData', User::All());
                return redirect()->route('addSlide')->with('success', 'Slide Created Successfully');
            }
        }
    }
    public function editSlide($id)
    {
        $this->data('userData', User::all());
        $this->data('tradeData', Trade::all());
        $this->data('ProjectData', Project::all());
        $this->data('SlideData', Slide::all());
        $this->data('updateSlideData',Slide::findOrFail($id));
        return view($this->pagePath.'editSlide',$this->data);
    }

    public function updateSlide(Request $request, $id)
    {
        $Slide = Slide::findOrFail($id);
        $Slide->user_id = \request('user_id');
        $Slide->trade_id = \request('trade_id');
        $Slide->training_location = \request('training_location');
        $Slide->project_id = \request('project_id');

        if($request->hasFile('training_photo')){
            if (is_file($Slide->training_photo) && file_exists($Slide->training_photo)){
                unlink($Slide->training_photo);
            }
            $filename = time().'.'.request()->file('training_photo')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('training_photo')->move('public/images/Slide/',$filename);
            $Slide->training_photo =$filename;
        }
        $Slide->save();
        return redirect()->route('addSlide')->with('success', 'Record Updated');
    }
    public function destroy($id)
    {
        $addSlide = Slide::findOrFail($id);

        $addSlide->delete();

        return redirect()->route('addSlide')->with('success', 'Record Deleted');

    }
}
