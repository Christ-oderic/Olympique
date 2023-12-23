<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seasons extends Model
{
    use HasFactory;

    protected $fillable = [
        'seasons',   //Les saisons disponible sur le site
    ];

    public function player()
    {
        $this->belongsToMany(players::class, 'playersSeasons');
    }
}
