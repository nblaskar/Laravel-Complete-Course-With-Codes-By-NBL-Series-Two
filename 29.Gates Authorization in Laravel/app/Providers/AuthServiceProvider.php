<?php

namespace App\Providers;

use App\Gates\AdminGates;
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
        // 1)Define and register the direct Gate Authorization 
        // Gate::define('isAdmin', function($user){
        //     if($user->email === 'admin@gmail.com')
        //     {
        //         return true;
        //     }else{
        //         return false;
        //     }
        // });

        // OR

        // 2)Register Our Class Based Gate Authorization 
        Gate::define('isAdmin',[AdminGates::class, 'check_admin']);
        
    }
}
