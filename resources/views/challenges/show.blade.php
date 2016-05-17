@extends('layouts.master')

@section('content')
  <div class="main-content">

    <div class="main-panel">
      <div class="panel-content">

        <h2>{{$challenge->name}}</h2>
        <p>{{$challenge->creator->name}}</p>
        <p>{{$challenge->description}}</p>

        <h2>Entries</h2>
        @foreach($challenge->entries as $entry)
          <div class="entry">
            <p>{{$entry->created_at->format('M d, Y')}}</p>
            <p>User: <a href="/users/{{$entry->user->id}}">{{$entry->user->name}}</a></p>
            <p>Note: {{$entry->note}}</p>
            <img src="{{$entry->filename}}">
            <p>Votes: {{$entry->votes->count()}}</p>
          </div>
        @endforeach
      </div>
    </div>

  </div>
@endsection
