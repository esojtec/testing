<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class AssetsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Ligamos con bind assets del facade y la libreria Assets
        // Facade localizado en \App\Facades\AssetsFacade
        // Libraries localizado en \App\Libraries\Assets
        // el return de getFacadeAccessor 'assets' debe ser igual al parametro bind 'assets'
        // Si no dara error 

        $this->app->bind('assets', function(){
            return new \App\Libraries\Assets;
        });

        $this->app->booting(function(){
            $loader = AliasLoader::getInstance();
            $loader->alias('Assets', '\App\Facades\AssetsFacade');
        });

        // Este codigo es equivalente al de arriba
        /*        
        \App::bind('assets', function(){
            return new \App\Libraries\Assets;
        });

        \App::booting( function(){
            $loader = AliasLoader::getInstance();
            $loader->alias('Assets', '\App\Facades\AssetsFacade');
        });*/
    }
}
