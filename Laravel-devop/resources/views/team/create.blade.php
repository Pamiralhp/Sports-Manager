@extends('layouts.layout')
<!-- boostrap -->

@section('content')
<h2> Create a team </h2>  
<form action="{{ route('teams.index') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input id="name" name="name" type="text" class="form-control" tabindex="1">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">City</label>
    <input id="city" name="city" type="text" class="form-control" tabindex="2">
  </div>
  
  <a href="{{ route('teams.index') }}" class="btn btn-secondary" tabindex="5">Cancel</a>
  <input type="submit" class="btn btn-primary" tabindex="4"></input>
</form>

@endsection