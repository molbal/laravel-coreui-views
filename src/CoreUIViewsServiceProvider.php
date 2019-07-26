<?php

namespace molbal\CoreUIViews;

use Illuminate\Support\ServiceProvider;

class CoreUIViewsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'molbal');
         $this->loadViewsFrom(__DIR__.'/../views', 'coreui-static');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
//         $this->loadRoutesFrom(__DIR__.'/routes.php');


		$this->publishes([
			__DIR__.'/../public' => public_path('/admin')
		], 'coreui');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/coreuiviews.php', 'coreuiviews');

        // Register the service the package provides.
        $this->app->singleton('coreuiviews', function ($app) {
            return new CoreUIViews;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['coreuiviews'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/coreuiviews.php' => config_path('coreuiviews.php'),
        ], 'coreuiviews.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/molbal'),
        ], 'coreuiviews.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/molbal'),
        ], 'coreuiviews.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/molbal'),
        ], 'coreuiviews.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
