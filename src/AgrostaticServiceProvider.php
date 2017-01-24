<?php

namespace Fairhypo\Agrostatic;

use Illuminate\Support\ServiceProvider;

class AgrostaticServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */


    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/' => config_path() . "/"], 'config');
    }

    public function register()
    {
        $this->app->bind('Agro', function($app)
        {
            return new Agro();
        });
    }
}