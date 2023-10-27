<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team; 

class Game extends Model
{
    use HasFactory;
    protected $guarded = [];
    // Relación inversa con Equipo
    public function localTeam(){
        return $this->belongsTo(Team::class, 'local_team');
    }
    //Relación inversa con Partido
    public function guestTeam() {
        return $this->belongsTo(Team::class,'guest_team');
    }
}
