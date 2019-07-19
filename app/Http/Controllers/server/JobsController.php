<?php

namespace App\Http\Controllers\server;

use App\Jobs;
use App\News;
use App\Slide;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobsController extends ServerController
{

    public function addJob(Request $request){
        if($request->isMethod('get')){
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('title',$this->title('add Job Details'));
            return view($this->pagePath.'addJob',$this->data);
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'employer' => 'required',

            ]);
            


            if (($request->hasFile('upload'))) {
                $image = $request->file('upload');
                $ext = $image->getClientOriginalExtension();

                $imageName = (microtime()) . '.' . $ext;
                $uploadPath = public_path('images/Job/');
                if ($image->move($uploadPath, $imageName)) {
                    $data['image'] = $imageName;
                }
            }

            $data['employer'] = $request->employer;
            $data['job_title'] = $request->job_title;
            $data['url'] = $request->url;
                    if (Jobs::create($data)) {
                return redirect()->route('addJob')->with('success', 'Job was inserted successfully');
            }

        }

    }
    }
