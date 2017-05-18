<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['title', 'review', 'release', 'artist', 'photo'];

    public function songs(){
        return $this->hasMany('App\Song', 'album_id', 'id');
    }

    public function reviews(){
        return $this->hasMany('App\Review', 'album_id', 'id');
    }
}