<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('team\index', compact('teams'));
    }

    public function create()
    {
        return view('team\create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'city' => 'required',
    ]);

    $team = new Team;
    $team->name = $request->name;
    $team->city = $request->city;
    $team->save();

    return redirect('teams');
}

    public function edit($id)
    {
        $team = Team::find($id);
        return view('team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        $team->name = $request->name;
        $team->city = $request->city;
        $team->save();

        return redirect()->route('teams.index');
    }

    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();

        return redirect()->route('teams.index');
    }
}
