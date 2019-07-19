<?php

namespace App\Http\Controllers\server;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProjectController extends ServerController
{

    public function addProject(Request $request)
    {
        if($request->isMethod('get')) {
            $this->data('projectData', Project::all());
            $this->data('title', $this->title('Front Menu Controll'));
            return view($this->pagePath . 'Project.addProject', $this->data);
        }
        if($request->isMethod('post')){
            $this->validate($request, [
                'project_name' => 'required',
                'project_address' => 'required',
            ]);
            $data['project_address'] = $request->project_address;
            $data['project_name'] = $request->project_name;
            $data['project_description'] = $request->project_description;
            $data['project_status'] = ($request->project_status);

            if (Project::create($data)) {
                $this->data('projectData', Project::all());
                return redirect()->route('addProject')->with('success', 'Project Record Created Successfully');
            }
        }
    }

    public function editProject($id)
    {
        $this->data('projectData',Project::findOrFail($id));
        return view($this->pagePath.'Project.editProject',$this->data);
    }
    public function updateProject(Request $request, $id)
    {
        $about = Project::findOrFail($id);
        $requestData = \request()->all();
        $about->update($requestData);
        return redirect()->route('addProject')->with('success', 'Record Updated');
    }
    public function destroy($id)
    {
        $addProject = Project::findOrFail($id);

        $addProject->delete();

        return redirect()->route('addProject')->with('success', 'Record Deleted');

    }
    public function updateProjectStatus(Request $request, $id)
    {
        $about = Project::findOrFail($id);
        $requestData = \request()->all();
        $about->update($requestData);
        return redirect()->route('addProject')->with('success', 'Project Status Updated');
    }

}
