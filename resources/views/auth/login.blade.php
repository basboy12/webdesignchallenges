@extends('layouts.master')

@section('content')
  <div class="main-content">

    <div class="main-panel">
      <div class="panel-content">

        <form action="/login" method="post">
          <label for="email">Email</label>
          <input id="email" type="email" name="email">

          <label for="password">Password</label>
          <input id="password" type="password" name="password">

          <input type="submit" value="Login">
        </form>


      </div>
    </div>

  </div>
@endsection
