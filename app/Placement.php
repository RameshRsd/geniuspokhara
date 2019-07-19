<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    protected $fillable=['employer_id','jobseeker_id','position','salary','contact','remarks'];

}
