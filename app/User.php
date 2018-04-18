<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','city','avatar','firstname','middlename','lastname','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles(){
        return $this->hasMany('App\Role');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function replies(){
        return $this->hasMany('App\Reply');
    }

    public function comments(){
        return $this->hasMany('App\Comments');
    }
}
