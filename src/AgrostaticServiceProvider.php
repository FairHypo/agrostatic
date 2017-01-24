<?php

namespace Fairhypo\Agrostatic;

use Illuminate\Support\ServiceProvider;

class AgrostaticServiceProvider extends ServiceProvider
{
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