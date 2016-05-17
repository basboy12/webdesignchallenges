@extends('layouts.master')

@section('content')
  <div class="main-content">

    <div class="main-panel">
      <div class="panel-content">
        <img src="{{$user->photo}}">
        <p>Name: {{$user->name}}</p>
        <p>Email: {{$user->email}}</p>
        <p>Joined On: {{$user->created_at->format('M d, Y')}}</p>


      </div>
    </div>

  </div>
@endsection
