<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\User;

class UserController extends Controller
{
    public function show($id) {
      $user = User::find($id);
      return view('users.show', compact('user'));
    }
}
