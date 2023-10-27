@extends('layouts.layout')

@section('content')
    <h2>Edit Game</h2>
    <form action="{{ route('games.update', $game->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="local_team" class="form-label">Local Team</label>
            <select id="local_team" name="local_team" class="form-select" tabindex="1">
                @foreach($teams as $team)
                    <option value="{{ $team->id }}" {{ $team->id === $game->local_team ? 'selected' : '' }}>{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="guest_team" class="form-label">Guest Team</label>
            <select id="guest_team" name="guest_team" class="form-select" tabindex="2">
                @foreach($teams as $team)
                    <option value="{{ $team->id }}" {{ $team->id === $game->guest_team ? 'selected' : '' }}>{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input id="city" name="city" type="text" class="form-control" value="{{ $game->city }}" tabindex="3">
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input id="date" name="date" type="date" class="form-control" value="{{ $game->date }}" tabindex="4">
        </div>

        <a href="{{ route('games.index') }}" class="btn btn-secondary" tabindex="6">Cancel</a>
        <button type="submit" class="btn btn-primary" tabindex="7">Update</button>
    </form>
@endsection
