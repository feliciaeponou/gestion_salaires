<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandePaiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
         'periode',
             'nbSeances', 
             'volumeHoraireTotal', 
             'coutTotal',
             'valide',
             'rejete',
             'paye',
    ];

    public function employes()
    {
        return $this->belongsTo(Employe::class);
    }


}
