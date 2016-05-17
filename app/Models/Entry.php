<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    public function challenge() {
      return $this->belongsTo('App\Models\Challenge');
    }

    public function votes() {
      return $this->hasMany('App\Models\Vote');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
