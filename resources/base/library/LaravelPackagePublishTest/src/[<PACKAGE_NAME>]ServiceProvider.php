<?php

namespace [<PACKAGE_BASE>]\[<PACKAGE_NAME>];

use Illuminate\Support\ServiceProvider;

class [<PACKAGE_NAME>]ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-publish-test-package');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-publish-test-package');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('[<PACKAGE_NAME>].php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/[<PACKAGE_NAME>]'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/[<PACKAGE_NAME>]'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/[<PACKAGE_NAME>]'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', '[<PACKAGE_NAME>]');

        // Register the main class to use with the facade
        $this->app->singleton('[<PACKAGE_NAME>]', function () {
            return new [<PACKAGE_NAME>];
        });
    }
}
