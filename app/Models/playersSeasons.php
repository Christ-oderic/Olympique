<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playersSeasons extends Model
{
    use HasFactory;

    protected $fillable = [
        'season_id',   // L'identifiant d'une saison créer dans la table seasons
        'player_id',   // L'identifiant d'un joueurs au club durant cette saison
    ];
}
