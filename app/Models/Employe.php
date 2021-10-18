<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
         'nom_prenoms',
             'date_naissance', 
             'genre', 
             'service', 
             'categorie', 
             'salaire_par_heure', 
             'date_debut_service', 
             'volume_horaire', 
            //  'photo', 
             'email', 
             'password', 
             'suspendu'
    ];


    public function pointages()
    {
        return $this->hasMany(Pointage::class);
    }

    public function demande_paiements()
    {
        return $this->hasMany(DemandePaiement::class);
    }

}
