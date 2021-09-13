<?php

namespace App\Providers;

use App\Models\User;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        Gate::define('admin-dashboard', function (User $user) {
            return $user->role === 'admin';
        });
        Gate::define('employe-dashboard', function (User $user) {
            return $user->role === 'employe';
        });
        Gate::define('comptable-dashboard', function (User $user) {
            return $user->role === 'comptable';
        });
        Gate::define('directeur-dashboard', function (User $user) {
            return $user->role === 'directeur';
        });
        Gate::define('informaticien-dashboard', function (User $user) {
            return $user->role === 'informaticien';
        });

        //
    }
}
