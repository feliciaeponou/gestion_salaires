<?php

namespace Database\Factories;

use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class EmployeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'matricule' => '0123456789',
            'nom' => $faker->name,
            'prenoms' => $faker->name,
            'date_naissance' => '24/06/1990',
            'genre' => 'H',
            'service' => 'Comptabilité',
            'categorie' => 'Comptabilité',
            'salaire_par_heure' => '5000',
            'date_debut_service' => '10/01/2020',
            'volume_horaire' => '0',
            'photo' => 'photophoto',
            'email' => $faker->unique()->safeEmail,
        ];
    }
}
