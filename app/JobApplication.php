<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable=['job_photo','job_source','job_f_name','job_l_name','job_birth_year','job_gender','job_marital_status','job_district','job_contact1','job_contact2','job_address','job_career','job_salary1','job_salary2','job_location','job_preference1','job_preference2','job_message'];
}
