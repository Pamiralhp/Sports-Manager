<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        'city'
    ];
    public function localgame()
    {
        return $this->hasMany(Game::class, 'local_team');
    }

    // Relationship for game where this team is the guest team
    public function guestgame()
    {
        return $this->hasMany(Game::class, 'guest_team');
    }
}
