<?php
/**
 * Created by PhpStorm.
 * User: raf
 * Date: 4/21/16
 * Time: 3:12 PM
 */

namespace Raftalks\UIX;


use Illuminate\Support\ServiceProvider;
use Raftalks\UIX\Builder\Factory;

class UIXServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'uix');

        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/uix'),
            __DIR__ . '/resources/assets' => public_path('vendor/raftalks/uix'),
            __DIR__.'/config/uix.php' => config_path('uix.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/uix.php', 'uix'
        );

        $this->app->bind('uix', function($app)
        {
            return new Factory();
        });

    }
}