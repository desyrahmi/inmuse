<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $table = 'songs';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['title', 'duration'];

    public function album(){
        return $this->belongsTo('App\Album','album_id','id');
    }
}
