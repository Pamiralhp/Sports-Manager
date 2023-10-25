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
    public function localMatches()
    {
        return $this->hasMany(Matches::class, 'local_team');
    }

    // Relationship for matches where this team is the guest team
    public function guestMatches()
    {
        return $this->hasMany(Matches::class, 'guest_team');
    }
}
