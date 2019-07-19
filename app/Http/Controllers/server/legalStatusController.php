<?php

namespace App\Http\Controllers\server;

use App\JobApplication;
use App\LegalStatus;
use App\Contact;
use App\NepalDistrict;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class legalStatusController extends ServerController
{
     public function legalStatus()
    {
        $this->data('viewMessage',Contact::paginate(5));
        $this->data('LegalData', LegalStatus::all());
        return view($this->pagePath.'legalStatus',$this->data);
    }
}