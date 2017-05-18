<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['name','username','phone','email','password', 'role'];

    public function photo(){
        return $this->belongsTo('App\Photo','photo_id','id');
    }

    public function reviews(){
        return $this->hasMany('App\Review', 'user_id', 'id');
    }
}
