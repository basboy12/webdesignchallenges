@extends('layouts.master')

@section('content')
  <div class="main-content">

    <div class="main-panel">
      <div class="panel-content">

        <h2>Create a new challenge</h2>
        <p><strong>How to:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem sit ad, possimus quisquam consequatur, obcaecati alias voluptates nostrum rem consequuntur nulla iure pariatur omnis repellat.</p>

        <form action="/challenges" method="post">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <label for="name">Name</label>
          <input id="name" type="text" name="name">

          <label for="description">Description</label>
          <textarea id="description" type="text" name="description"></textarea>

          <input type="submit" value="Submit">
        </form>

      </div>
    </div>

  </div>
@endsection
