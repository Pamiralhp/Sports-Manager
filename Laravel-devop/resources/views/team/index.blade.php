@extends('layouts.layout') 

@section('content')
    <div class="container">
        <h2>Teams</h2>
        
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>City</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($teams as $team)
                    <tr>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->city }}</td>
                        <td>
                            <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('teams.destroy', $team->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this team?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No teams available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
