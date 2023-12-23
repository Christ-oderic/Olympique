<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keyPosts extends Model
{
    use HasFactory;

    protected $fillable = [
        'postKey'  // Nom du poste clé
    ];

}
