<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $fillable = [
         'nom', 
             'prenoms', 
             'date_naissance', 
             'genre', 
             'service', 
             'categorie', 
             'salaire_par_heure', 
             'date_debut_service', 
             'volume_horaire', 
             'photo', 
             'email', 
    ];
}
