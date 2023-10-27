@extends('layouts.layout')

@section('content')
    <div class="container">
        <h2>Games</h2>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Local Team</th>
                    <th>Guest Team</th>
                    <th>City</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($games as $game)
                    <tr>
                        <td>{{ $game->localTeam->name }}</td>
                        <td>{{ $game->guestTeam->name }}</td>
                        <td>{{ $game->city }}</td>
                        <td>{{ $game->date }}</td>
                        <td>
                            <a href="{{ route('games.edit', $game->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('games.destroy', $game->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this game?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No games available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
