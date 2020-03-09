<?php

namespace AhmedSliman\Pages;

use Illuminate\Support\ServiceProvider;

class PagesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'pages');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/pages.php', 'pages');
        $this->publishes([
            __DIR__.'/config/pages.php' => config_path('pages.php'),
            __DIR__.'/views' => resource_path('views/vendor/pages')
        ]);
    }

    public function register()
    {
        //
    }
}
