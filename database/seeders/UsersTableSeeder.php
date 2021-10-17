<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{

    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
     * @var array
     */
     $users = [
        [
            'name' => 'Admin Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'password' => Hash::make('admin'),
            'matricule' => '1234',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Employe Employe',
            'email' => 'employe@gmail.com',
            'email_verified_at' => now(),
            'role' => 'employe',
            'matricule' => '5678',
            'password' => Hash::make('employe'),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Informaticien Informaticien',
            'email' => 'informaticien@gmail.com',
            'email_verified_at' => now(),
            'role' => 'informaticien',
            'password' => Hash::make('informaticien'),
            'matricule' => '9101',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Directeur Directeur',
            'email' => 'directeur@gmail.com',
            'email_verified_at' => now(),
            'role' => 'directeur',
            'password' => Hash::make('directeur'),
            'matricule' => '1213',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Comptable Comptable',
            'email' => 'comptable@gmail.com',
            'email_verified_at' => now(),
            'role' => 'comptable',
            'password' => Hash::make('comptable'),
            'matricule' => '1415',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Secretaire Comptable',
            'email' => 'secretaire_comptable@gmail.com',
            'email_verified_at' => now(),
            'role' => 'secretaire_comptable',
            'password' => Hash::make('secretaire_comptable'),
            'matricule' => '1617',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'RH',
            'email' => 'rh@gmail.com',
            'email_verified_at' => now(),
            'role' => 'rh',
            'password' => Hash::make('rh'),
            'matricule' => '1819',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Oulai Bernard',
            'email' => 'oulaibernard@gmail.com',
            'email_verified_at' => now(),
            'role' => 'employe',
            'password' => Hash::make('oulaibernard'),
            'matricule' => '0123',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Koffi Amenan',
            'email' => 'amenankoffi@gmail.com',
            'email_verified_at' => now(),
            'role' => 'employe',
            'password' => Hash::make('amenankoffi'),
            'matricule' => '1011',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Djirabou Leonard',
            'email' => 'leonarddjirabou@gmail.com',
            'email_verified_at' => now(),
            'role' => 'employe',
            'password' => Hash::make('leonarddjirabou'),
            'matricule' => '1516',
            'created_at' => now(),
            'updated_at' => now(),
        ],
       
    ];

        foreach ($users as $index => $user)
        {
            $result = User::create($user);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted '.count($users). ' records');
    }
    
}
