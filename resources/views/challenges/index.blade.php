@extends('layouts.master')

@section('content')
  <div class="main-content">

    <section class="side-panel">
      <div class="panel-content">
        <div class="panel-tab clearfix">
          <h3>My Challenges</h3>
          <hr>
          <ul>
            <li>
              <span class="name">Brand Logo</span>
              <span class="users">12 <i class="fa fa-user" aria-hidden="true"></i></span>
            </li>
          </ul>
        </div>

        <div class="panel-tab">
          <h3>Most Popular</h3>
          <hr>
          <ul>
            <li>
              <span class="name">Portfolio Design</span>
              <span class="users">14 <i class="fa fa-user" aria-hidden="true"></i></span>
            </li>
            <li>
              <span class="name">Pinterest Clone</span>
              <span class="users">7 <i class="fa fa-user" aria-hidden="true"></i></span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <section class="main-panel">
      <div class="panel-content">

        @foreach($challenges as $challenge)
          <div class="challenge">
            <div class="thumbnail">
              <div class="status"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
              <div class="countdown"></div>
            </div>
            <div class="about">
              <h2>{{$challenge->name}}</h2>
              <p class="creator">by <span>{{$challenge->creator->name}}</span></p>
              <p class="short-description">{{$challenge->description}}</p>
              <a href="/challenges/{{$challenge->id}}">View Challenge</a>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </div>
@endsection
