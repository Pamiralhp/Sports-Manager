<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $games = Game::all();
        return view('game.index') ->with('games', $games);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::all();
        return view('game.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'local_team' => 'required',
            'guest_team' => 'required|different:local_team',
            'date' => 'required',
        ]);

        $game = new Game();
        
        $localTeamId = $request->input('local_team');
        
        $localTeam = Team::find($localTeamId);
        
        $game->local_team = $localTeamId;
        $game->guest_team = $request->input('guest_team');
        $game->city = $localTeam->city;
        $game->date = $request->input('date');

        $game->save();

        return redirect('/games');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $game = Game::find($id);
        $teams = Team::all();
        return view('game.edit', compact('game', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'local_team' => 'required',
            'guest_team' => 'required|different:local_team',
            'date' => 'required',
        ]);

        $game = Game::find($id);
        $game->local_team = $request->get('local_team');
        $game->guest_team = $request->get('guest_team');

        $localTeam = Team::find($request->get('local_team'));
        $game->city = $localTeam->city;

        $game->date = $request->get('date');

        $game->save();

        return redirect('/games');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Game::find($id);
        $game->delete();
        return redirect('/games');
    }
}
