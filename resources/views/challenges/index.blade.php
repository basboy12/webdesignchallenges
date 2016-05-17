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
      <div class="challenge">
        <div class="thumbnail">
          <div class="status"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
          <div class="countdown"></div>
        </div>
        <div class="about">
          <h2>Brand Logo</h2>
          <p class="creator">by <span>aoozdemir</span></p>
          <p class="short-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi repellendus, voluptatem ab amet sunt officia nemo aliquid blanditiis eveniet quos earum voluptatibus. Nesciunt, porro, fugit!</p>
        </div>
      </div>

      <div class="challenge">
        <div class="thumbnail">
          <div class="status"><i class="fa fa-check" aria-hidden="true"></i></div>
          <div class="countdown"></div>
        </div>
        <div class="about">
          <h2>Portfolio Design</h2>
          <p class="creator">by kyle</p>
          <p class="short-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi repellendus, voluptatem ab amet sunt officia nemo aliquid blanditiis eveniet quos earum voluptatibus. Nesciunt, porro, fugit!</p>
        </div>
      </div>

      <div class="challenge">
        <div class="thumbnail">
          <div class="status"><i class="fa fa-check" aria-hidden="true"></i></div>
          <div class="countdown"></div>
        </div>
        <div class="about">
          <h2>Pinterest Clone</h2>
          <p class="creator">by danigil</p>
          <p class="short-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi repellendus, voluptatem ab amet sunt officia nemo aliquid blanditiis eveniet quos earum voluptatibus. Nesciunt, porro, fugit!</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
