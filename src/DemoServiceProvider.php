<?php
namespace Avin\Demo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/resources/views' => base_path('resources/views/vendor/avin-demo'),
        ], 'views');

        $this->publishes([
            __DIR__ . '/config' => config_path('avin-demo'),
        ], 'config');

        $this->publishes([
            __DIR__.'/resources/assets' => public_path('vendor/avin-demo'),
        ], 'public');

        $this->publishes([
            __DIR__ . '/database/migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');


        require __DIR__ . '/Http/routes.php';

        $this->loadViewsFrom(__DIR__ . '/resources/views', 'avin-demo');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/main.php', 'avin-demo.main'
        );

        $this->app->bind('avin-demo', function() {
            return new Demo;
        });
    }
}