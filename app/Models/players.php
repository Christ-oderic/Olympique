<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class players extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',   //Prénom du joueur
        'lastName',   //Nom du joueur
        'dateOfBirth',   //Date de naissance du joueur
        'placeOfBirth',   //Lieu de naissance du joueur
        'age',   //Age du joueur
        'key_posts_id',   //Id du poste clé
        'height',   //Taille du joueur
        'nationality',   //Nationalité du joueur
        'dateOfJoin',   //Date début du premier contract avec le club
        'endContract',   //Date de fin du contrat actuel du joueur
        'posts',   //Les posts du joueur
        'shirtNumber',   //Numéro de maillot du joueur
    ];

    public function keyPost()
    {
        return $this->hasOne(keyPosts::class, 'key_posts_id');
    }

    public function playerSeasons()
    {
        return $this->belongsToMany(seasons::class, 'playersSeasons');
    }

}
