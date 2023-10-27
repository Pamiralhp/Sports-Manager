@extends('layouts.app')

@section('content')
    <h2>Edit Team</h2>
    <form action="{{ route('teams.update', $team->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Team Name</label>
            <input id="name" name="name" type="text" class="form-control" value="{{ $team->name }}" tabindex="1">
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input id="city" name="city" type="text" class="form-control" value="{{ $team->city }}" tabindex="2">
        </div>

        <a href="{{ route('teams.index') }}" class="btn btn-secondary" tabindex="4">Cancel</a>
        <button type="submit" class="btn btn-primary" tabindex="5">Update</button>
    </form>
@endsection
