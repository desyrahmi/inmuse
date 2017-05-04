<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['name'];

    public function user(){
        return $this->hasMany('App\User','photo_id','id');
    }

    public function album(){
        return $this->hasOne('App\Album', 'photo_id', 'id');
    }
}