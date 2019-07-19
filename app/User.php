<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as ValidUser;
class User extends ValidUser
{

    protected $fillable=['name','username','email','image','user_type','password'];

    public function news(){
        return  $this->hasMany('App\News');
    }
    public function slide(){
    return  $this->hasMany('App\Slide');
}
}
