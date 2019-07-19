<?php

namespace App\Http\Controllers\client;
use App\Slide;
use App\User;
use App\Trade;
use App\NewsFeed;
use App\Application_Form;
use App\Project;
use App\Contact;
use App\Program;
use App\About;
use App\NepalDistrict;
use App\Trainings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class ApplicationController extends ClientController
{
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $this->data('aboutData', About::all());
        $this->data('userData', User::all());
        $this->data('newsData', NewsFeed::orderBy('id', 'DESC')->get());
        $this->data('tradeData', Trade::all());
        $this->data('SlideData', Slide::orderBy('id', 'DESC')->get());
        $this->data('trainingData', Trainings::all());
        $this->data('ProjectData', Project::all());
        $this->data('title', $this->title('Training & Employment Service Provider'));
        return view($this->pagePath . 'home', $this->data);
    }
    public function About()
    {
        $this->data('aboutData', About::all());
        $this->data('userData', User::all());
        $this->data('trainingData', Trainings::all());
        $this->data('newsData', NewsFeed::all());
        $this->data('tradeData', Trade::all());
        $this->data('SlideData', Slide::all());
        $this->data('ProjectData', Project::all());
        $this->data('title', $this->title('About Us'));
        return view($this->pagePath . 'About.About', $this->data);
    }
    public function Profile()
    {
        $this->data('aboutData', About::all());
        $this->data('userData', User::all());
        $this->data('trainingData', Trainings::all());
        $this->data('newsData', NewsFeed::all());
        $this->data('tradeData', Trade::all());
        $this->data('SlideData', Slide::all());
        $this->data('ProjectData', Project::all());
        $this->data('title', $this->title('Organizational Profile'));
        return view($this->pagePath . 'Profile.Profile', $this->data);
    }
    public function Gallery()
    {
        $this->data('aboutData', About::all());
        $this->data('userData', User::all());
        $this->data('trainingData', Trainings::all());
        $this->data('newsData', NewsFeed::all());
        $this->data('tradeData', Trade::all());
        $this->data('SlideData', Slide::orderBy('id', 'DESC')->get());
        $this->data('ProjectData', Project::all());
        $this->data('title', $this->title('Gallery'));
        return view($this->pagePath . 'Gallery', $this->data);
    }
    public function contact(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('userData', User::all());
            $this->data('newsData', NewsFeed::all());
            $this->data('tradeData', Trade::all());
            $this->data('SlideData', Slide::all());
            $this->data('ProjectData', Project::all());
            $this->data('title', $this->title('Contact Us'));
            return view($this->pagePath . 'contact', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required',
                'contact' => 'required',
                'message' => 'required',
            ]);

            $data['name'] = $request->name;
            $data['contact'] = $request->contact;
            $data['email'] = $request->email;
            $data['message'] = ($request->message);

            if (Contact::create($data)) {
                return redirect()->route('contact')->with('success', 'Thanks for Contacting Us ! We will Contact you back soon !');
            }
        }

    }
    public function application(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('trainingData', Trainings::all());
            $this->data('districtData',NepalDistrict::all());
            $this->data('newsData', NewsFeed::all());
            $this->data('title', $this->title('Online Application Form'));

            return view($this->pagePath . 'application_form', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'f_name' => 'required',
                'l_name' => 'required',
                'email' => 'required',
                'p_address' => 'required',
                'district' => 'required',
                'location' => 'required',
                'mbl_number1' => 'required',
                'mbl_number2' => 'required',
                'training1' => 'required',
                'p_location' => 'required',
            ]);
        }
        $data['f_name'] = $request->f_name;
        $data['user_id'] = $request->user_id;
        $data['l_name'] = $request->l_name;
        $data['email'] = $request->email;
        $data['applicant_gender'] = $request->applicant_gender;
        $data['p_address'] = $request->p_address;
        $data['district'] = $request->district;
        $data['location'] = $request->location;
        $data['mbl_number1'] = $request->mbl_number1;
        $data['mbl_number2'] = $request->mbl_number2;
        $data['training1'] = $request->training1;
        $data['training2'] = $request->training2;
        $data['p_location'] = $request->p_location;
        $data['applicant_messages'] = $request->applicant_messages;
        if (Application_Form::create($data)) {
            return redirect()->route('application_form')->with('success', 'Successfully Submitted Form');
        }

    }
    public function NewsDetails($id)
    {
        $this->data('aboutData', About::all());
        $this->data('userData', User::all());
        $this->data('newsData', NewsFeed::orderBy('id', 'DESC')->limit(8)->get());
        $this->data('tradeData', Trade::all());
        $this->data('SlideData', Slide::orderBy('id', 'DESC')->get());
        $this->data('trainingData', Trainings::orderBy('id', 'DESC')->get());
        $this->data('ProjectData', Project::all());
        $this->data('article',NewsFeed::findOrFail($id));
        $this->data('title', NewsFeed::findOrFail($id)->news_title .' - News Feed - GMTI');
        $this->data('description', NewsFeed::findOrFail($id)->news_description);
        $this->data('image', NewsFeed::findOrFail($id)->news_photo);
        return view($this->pagePath . 'Article.NewsDetails', $this->data);
    }
    public function OnGoingProject()
    {
        $this->data('ProjectData', Project::all());
        $this->data('ProgramData', Program::all());
        $this->data('tradeData', Trade::all());
        $this->data('districtData', NepalDistrict::all());
        $this->data('title', $this->title('On Going Project'));
        return view($this->pagePath . 'Project.OnGoingProject', $this->data);
    }
    public function CompletedProject()
    {
        $this->data('ProjectData', Project::all());
        $this->data('ProgramData', Program::all());
        $this->data('tradeData', Trade::all());
        $this->data('districtData', NepalDistrict::all());
        $this->data('title', $this->title('Completed Project'));
        return view($this->pagePath . 'Project.CompletedProject', $this->data);
    }

}