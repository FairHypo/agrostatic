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

    }

    public function register()
    {
        $this->app->bind('agrostatic', function($app)
        {
            return new Agrostatic();
        });
    }
}