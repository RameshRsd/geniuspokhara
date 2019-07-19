<?php

namespace App\Http\Controllers\server;

use App\About;
use App\User;
use App\Slide;
use App\Trade;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontMenuController extends ServerController
{

    public function addAbout()
    {
            $this->data('aboutData', About::all());
            $this->data('title', $this->title('Front Menu Controll'));
            return view($this->pagePath . 'Front-Menu.addAbout', $this->data);
    }
    public function editMission($id)
    {
        $this->data('aboutData',About::findOrFail($id));
        return view($this->pagePath.'Front-Menu.editMission',$this->data);
    }
    public function updateMission(Request $request, $id)
    {
        $about = About::findOrFail($id);
        $requestData = \request()->all();
        $about->update($requestData);
        return redirect()->route('addAbout')->with('success', 'Record Updated');
    }
    public function editIntro($id)
    {
        $this->data('aboutData',About::findOrFail($id));
        return view($this->pagePath.'Front-Menu.editIntro',$this->data);
    }
    public function updateIntro(Request $request, $id)
    {
        $about = About::findOrFail($id);
        $requestData = \request()->all();
        $about->update($requestData);
        return redirect()->route('addAbout')->with('success', 'Record Updated');
    }

}
