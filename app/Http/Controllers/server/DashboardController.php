<?php

namespace App\Http\Controllers\server;

use App\User;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends ServerController
{

    public function index()
    {
        $this->data('title', $this->title('Admin Dashboard'));
        return view($this->pagePath . 'dashboard', $this->data);

    }
}
