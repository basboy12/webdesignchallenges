<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function challenge() {
      return $this->belongsTo('App\Models\Challenge');
    }

    public function entry() {
      return $this->belongsTo('App\Models\Entry');
    }

    public function user() {
      return $this->belongsTo('App\Models\User');
    }
}
