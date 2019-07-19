<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable=['project_name','project_address','project_description','project_status'];

  public function Slide(){
        return $this->hasMany(Slide::class);
    }
}
