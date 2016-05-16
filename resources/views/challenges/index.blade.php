@extends('layouts.master')

@section('content')
  <div class="main-content">

    <div class="side-panel">
      <div class="panel-content">
        <div class="my-challenges">
          <h3 class="title">My Challenges</h3>
          <ul class="challenges">
            <li class="challenge">
              <span class="name">Brand Logo</span>
              <span class="users">12 <i class="fa fa-user" aria-hidden="true"></i></span>
            </li>
          </ul>
        </div>

        <div class="most-popular">
          <h3 class="title">Most Popular</h3>
          <ul class="challenges">
            <li class="challenge">
              <span class="name">Portfolio Design</span>
              <span class="users">14 <i class="fa fa-user" aria-hidden="true"></i></span>
            </li>
            <li class="challenge">
              <span class="name">Pinterest Clone</span>
              <span class="users">7 <i class="fa fa-user" aria-hidden="true"></i></span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="main-panel">
      <div class="panel-content">
        <div class="challenge">
          <div class="remaining">
            <div class="status"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
            <div class="countdown"></div>
          </div>
          <div class="about">
            <h2 class="name">Brand Logo</h2>
            <p class="creator">by aoozdemir</p>
            <p class="short-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi repellendus, voluptatem ab amet sunt officia nemo aliquid blanditiis eveniet quos earum voluptatibus. Nesciunt, porro, fugit!</p>
          </div>
        </div>

        <div class="challenge">
          <div class="remaining">
            <div class="status"><i class="fa fa-check" aria-hidden="true"></i></div>
            <div class="countdown"></div>
          </div>
          <div class="about">
            <h2 class="name">Portfolio Design</h2>
            <p class="creator">by kyle</p>
            <p class="short-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi repellendus, voluptatem ab amet sunt officia nemo aliquid blanditiis eveniet quos earum voluptatibus. Nesciunt, porro, fugit!</p>
          </div>
        </div>

        <div class="challenge">
          <div class="remaining">
            <div class="status"><i class="fa fa-check" aria-hidden="true"></i></div>
            <div class="countdown"></div>
          </div>
          <div class="about">
            <h2 class="name">Pinterest Clone</h2>
            <p class="creator">by danigil</p>
            <p class="short-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi repellendus, voluptatem ab amet sunt officia nemo aliquid blanditiis eveniet quos earum voluptatibus. Nesciunt, porro, fugit!</p>
          </div>
        </div>
      </div>

    </div>
  @endsection
