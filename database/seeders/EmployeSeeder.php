<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Employe;
use Illuminate\Support\Facades\Hash;

class EmployeSeeder extends Seeder
{

    /**
     * @var array
     */
    protected $employes = [
        [
            'matricule' => '0123',
            'nom_prenoms' => 'Oulai Bernard',
            'date_naissance' => '27/03/1980',
            'genre' => 'Homme',
            'service' => 'Recrutement',
            'categorie' => 'RH',
            'intitule_poste' => 'RH',
            'salaire_base' => '100000',
            'sursalaire' => '5000',
            'prime_transport' => '25000',
            'numero_cnps' => '0123',
            'date_entree' => '16/08/2010',
            'date_embauche' => '16/08/2010',
            'photo' => 'photophoto',
            'email' => 'oulaibernard@entreprise.com',
            'password' => 'password',
            'suspendu' => 'non',
        ],
        [
            'matricule' => '1011',
            'nom_prenoms' => 'Koffi Amenan',
            'date_naissance' => '16/06/1992',
            'genre' => 'Femme',
            'service' => 'Marketing',
            'categorie' => 'Marketing et communication',
            'intitule_poste' => 'RH',
            'salaire_base' => '200000',
            'sursalaire' => '8000',
            'prime_transport' => '50000',
            'numero_cnps' => '1011',
            'date_entree' => '16/08/2010',
            'date_embauche' => '16/08/2010',
            'photo' => 'photophoto',
            'email' => 'amenankoffi@entreprise.com',
            'password' => 'password',
            'suspendu' => 'non',
        ],
        [
            'matricule' => '1516',
            'nom_prenoms' => 'Djirabou Leonard',
            'date_naissance' => '16/02/1995',
            'genre' => 'Homme',
            'service' => 'Logistique',
            'categorie' => 'Departements achats et logistique',
            'intitule_poste' => 'RH',
            'salaire_base' => '300000',
            'sursalaire' => '15000',
            'prime_transport' => '100000',
            'numero_cnps' => '1516',
            'date_entree' => '16/08/2010',
            'date_embauche' => '16/08/2010',
            'photo' => 'photophoto',
            'email' => 'leonarddjirabou@entreprise.com',
            'password' => 'password',
            'suspendu' => 'non',
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
