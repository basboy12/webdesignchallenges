<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Challenge;

class ChallengeController extends Controller
{
    public function index() {
          $challenges = Challenge::orderBy('end_date', 'desc')->take(10)->with('creator')->with('entries.votes')->get();
          return view('challenges.index', compact('challenges'));
    }

    public function show($id) {
        $challenge = Challenge::with('creator')->with('entries.user')->with('entries.votes')->find($id);
        return view('challenges.show', compact('challenge'));
    }

    public function create() {
        return view('challenges.create');
    }

    public function store() {
        die('No Saving Yet');
    }
}
