<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['rating', 'comment'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function album(){
        return $this->belongsTo('App\Album', 'album_id', 'id');
    }
}
