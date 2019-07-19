<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffDemand extends Model
{
    protected $fillable=['employer_id','jobdemand_title','jobdemand_district','jobdemand_location','jobdemand_exp','jobdemand_edu','jobdemand_salary','jobdemand_opening','jobdemand_gender','jobdemand_contact','demand_status','jobdemand_responsible','jobdemand_spec','jobdemand_desc','jobdemand_apply'];
}
