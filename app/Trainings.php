<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainings extends Model
{
    protected $fillable=['training_title','user_id','training_level','training_content','training_banner','training_duration','training_cost'];

}
