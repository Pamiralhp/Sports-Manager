<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all(); 
        return view('team.index')->with('teams', $teams);
    }

    public function create()
    {   
        
        return view('team.create'); 
    }
}
