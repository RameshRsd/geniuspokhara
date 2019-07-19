<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{

    protected $clientPath='client';
    protected $pagePath;

    public function __construct()
    {
        $this->data('title',$this->title('welcome'));
        $this->data('masterPath',$this->clientPath);
      $this->pagePath= $this->clientPath.'.pages.';
    }
}
