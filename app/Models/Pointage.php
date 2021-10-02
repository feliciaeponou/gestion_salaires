<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointage extends Model
{
    use HasFactory;

    protected $fillable = [
        'employe_id',
        'matricule',
        'debutSeance',
            'debutPause', 
            'finPause', 
            'finSeance', 
            'dateSeance', 
            'volumeHoraire', 

   ];


   public function employes()
    {
        return $this->belongsTo(Employe::class);
    }



}
