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
             'intitule_poste',
             'salaire_base',
             'sursalaire', 
             'prime_transport',
             'numero_cnps',
             'date_entree',
             'date_embauche', 
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
