@extends('layouts.layout')

@section('content')
    <h2>Create a Game</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('games.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="local_team" class="form-label">Local Team</label>
            <select id="local_team" name="local_team" class="form-select" tabindex="1" required>
                @foreach($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="guest_team" class="form-label">Guest Team</label>
            <select id="guest_team" name="guest_team" class="form-select" tabindex="2" required>
                @foreach($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input id="date" name="date" type="date" class="form-control" tabindex="4" required>
        </div>

        <a href="{{ route('games.index') }}" class="btn btn-secondary" tabindex="6">Cancel</a>
        <button type="submit" class="btn btn-primary" tabindex="7">Submit</button>
    </form>
@endsection