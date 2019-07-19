<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application_Form extends Model
{
    protected $fillable=['f_name','user_id','l_name','applicant_gender','email','p_address','district','location','mbl_number1','mbl_number2','training1','training2','p_location','applicant_messages'];
}
