<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    protected $fillable=['name','ctzn_number','gender','token_number','phone_number1','phone_number2','training','training_event','location','trainee_status','year','voucher_appeared','organization'];
}
