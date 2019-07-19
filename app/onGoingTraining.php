<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class onGoingTraining extends Model
{
    protected $fillable=['training_name','training_location','training_photo','user_id'];

}
