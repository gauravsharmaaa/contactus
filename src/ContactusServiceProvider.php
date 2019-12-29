<?php

namespace Sharmag\Contactus;

use Illuminate\Support\ServiceProvider;

class ContactusServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    { 
        $this->loadRoutesFrom(__DIR__.'/routes/web.php'); 
        $this->loadViewsFrom(__DIR__.'/views/', 'contactus');   
        $this->loadMigrationsFrom(__DIR__.'/migrations'); 
        $this->publishes([__DIR__.'/views/' => resource_path('views/vendor/contactus')]); 
        $this->publishes([__DIR__.'/assets/' => public_path('vendor/contactus')]);
        $this->publishes([__DIR__.'/config/contactus.php' => config_path('contactus.php')]);
    } 

    /**
     * Register the application services.
     *
     * @return void
     */ 
    public function register() 
    {
        $this->app->make('Sharmag\Contactus\ContactusController');
    }
}
