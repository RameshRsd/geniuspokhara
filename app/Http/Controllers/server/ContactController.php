<?php

namespace App\Http\Controllers\server;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContactController extends ServerController
{

    public function viewContact()
    {
            $this->data('contactData', Contact::all());
            $this->data('title', $this->title('Contact'));
            return view($this->pagePath . 'Contact', $this->data);
    }
}
