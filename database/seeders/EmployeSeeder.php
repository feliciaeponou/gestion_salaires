<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Employe;

class EmployeSeeder extends Seeder
{

    /**
     * @var array
     */
    protected $employes = [
        [
            'matricule' => '0123456789',
            'nom_prenoms' => 'Oulai Bernard',
            'date_naissance' => '27/03/1980',
            'genre' => 'H',
            'service' => 'Recrutement',
            'categorie' => 'RH',
            'salaire_par_heure' => '5000',
            'date_debut_service' => '16/08/2010',
            'volume_horaire' => '0',
            'photo' => 'photophoto',
            'email' => 'oulaibernard@entreprise.com',
        ],
        [
            'matricule' => '1011121314',
            'nom_prenoms' => 'Koffi Amenan',
            'date_naissance' => '16/06/1992',
            'genre' => 'F',
            'service' => 'Marketing',
            'categorie' => 'Marketing et communication',
            'salaire_par_heure' => '3000',
            'date_debut_service' => '08/01/2016',
            'volume_horaire' => '0',
            'photo' => 'photophoto',
            'email' => 'amenankoffi@entreprise.com',
        ],
        [
            'matricule' => '1516171819',
            'nom_prenoms' => 'Djirabou Leonard',
            'date_naissance' => '16/02/1995',
            'genre' => 'H',
            'service' => 'Logistique',
            'categorie' => 'Departements achats et logistique',
            'salaire_par_heure' => '8000',
            'date_debut_service' => '01/09/2015',
            'volume_horaire' => '0',
            'photo' => 'photophoto',
            'email' => 'leonarddjirabou@entreprise.com',
        ]

        ];




    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->employes as $index => $employe)
        {
            $result = Employe::create($employe);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted '.count($this->employes). ' records');

    }
}
