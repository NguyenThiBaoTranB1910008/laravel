<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('view-page-admin', function ($user) {

            if ($user->admin == 1) {
      
                return true;
      
            }
            return false;
      
        });
      
      
        Gate::define('view-page-guest', function ($user) {
            if ($user->admin == 1 || $user->admin == 0) {
      
                return true;
      
            }
      
            return false;
        });
    }
}
