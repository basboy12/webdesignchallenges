<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    protected $fillable = ['name', 'description', 'end_date'];

    public function creator() {
      return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function entries() {
        return $this->hasMany('App\Models\Entry');
    }

    public function votes() {
        return $this->hasMany('App\Models\Vote');
    }
}
