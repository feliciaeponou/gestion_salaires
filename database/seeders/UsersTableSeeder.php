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
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Employe Employe',
            'email' => 'employe@gmail.com',
            'email_verified_at' => now(),
            'role' => 'employe',
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
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Directeur Directeur',
            'email' => 'directeur@gmail.com',
            'email_verified_at' => now(),
            'role' => 'directeur',
            'password' => Hash::make('directeur'),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Comptable Comptable',
            'email' => 'comptable@gmail.com',
            'email_verified_at' => now(),
            'role' => 'comptable',
            'password' => Hash::make('comptable'),
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
