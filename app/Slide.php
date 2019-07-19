<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable=['user_id','trade_id','training_photo','training_location','project_id'];

    public function Project()
    {
        return $this->hasMany('App\Project');
    }
    }
