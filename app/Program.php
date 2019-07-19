<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable=['trade_id','user_id','project_id','training_level','training_duration','district_id','program_type','total','status','year','male','female'];

}
