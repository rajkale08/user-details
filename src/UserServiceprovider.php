<?php

namespace Raj\User;

use Illuminate\Support\ServiceProvider;

class UserServiceprovider extends ServiceProvider{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'user');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__.'/database/migrations/' => database_path('migrations')
        ], 'migrations');

        $this->publishes([
            __DIR__.'/views' => resource_path('views'),
        ]);
    }

    public function register()
    {
    }
}