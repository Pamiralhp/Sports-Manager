<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
 public function index(){
    $teams = Team::all();
    return view('team.index', ['teams' => $teams]);
}

    public function create(){
        return view('team.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|max:20',
            'city' => 'required|max:20',
        ]);

        $team = Team::create($data);

        return redirect(view('team.index'));
    }
}
