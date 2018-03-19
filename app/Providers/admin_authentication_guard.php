<?php

namespace App\Providers;

//use Illuminate\Support\ServiceProvider;
use App\Services\Auth\JwtGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class admin_authentication_guard extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
   public function boot()
    {
        $this->registerPolicies();

        Auth::extend('jwt', function ($app, $name, array $config) {
            // Return an instance of Illuminate\Contracts\Auth\Guard...

            return new JwtGuard(Auth::createUserProvider($config['provider']));
        });
    }
     
    public function register()
    {
        //
    }
}
