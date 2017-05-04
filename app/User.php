<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['name','username','phone','email','password'];

    public function role(){
        return $this->belongsTo('App\Role','role_id','id');
    }

    public function photo(){
        return $this->belongsTo('App\Photo','photo_id','id');
    }

    public function reviews(){
        return $this->hasMany('App\Review', 'user_id', 'id');
    }


    public function hasRole($roles){
        $this->have_role = $this->getUserRole();

        if (is_array($roles)){
            foreach ($roles as $need_role){
                if ($this->checkIfUserHasRole($need_role)){
                    return true;
                }
            }
        }else{
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }

    private function getUserRole(){
        return $this->role()->getResults();
    }

    private function checkIfUserHasRole($need_role){
        return (strtolower($need_role) == strtolower($this->have_role->type)) ? true : false;
    }
}
