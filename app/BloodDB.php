<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodDB extends Model
{
    protected $fillable=['b_fname','b_mname','b_lname','b_dob','b_gender','b_contact1','b_contact2','b_weight','b_donatestatus','b_paddress','b_ploation','b_taddress','b_tlocaiton','b_group','b_vehicle'];

}
