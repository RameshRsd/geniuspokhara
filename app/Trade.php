<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{

    protected $fillable=['occupation_name','trade_level','trade_hour','sector_id'];
    public function slide(){
        return  $this->hasMany('App\Slide');
    }
}
