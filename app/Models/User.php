<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function challenges() {
        return $this->hasMany('App\Models\Challenge', 'user_id');
    }

    public function entries() {
        return $this->hasMany('App\Models\Entry');
    }

    public function votes() {
        return $this->hasMany('App\Models\Vote');
    }
}
