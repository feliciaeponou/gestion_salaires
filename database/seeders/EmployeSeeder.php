<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employes')->insert([
            'matricule' => '0123456789',
            'nom' => 'Admin Admin',
            'prenoms' => 'admin lightbp',
            'date_naissance' => '24/06/1990',
            'genre' => 'H',
            'service' => 'Comptabilité',
            'categorie' => 'Comptabilité',
            'salaire_par_heure' => '5000',
            'date_debut_service' => '10/01/2020',
            'volume_horaire' => '0',
            'photo' => 'photophoto',
            'email' => 'admin@lightbp.com',
        ]);
    }
}
