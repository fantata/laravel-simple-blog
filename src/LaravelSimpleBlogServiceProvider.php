<?php

namespace Fantata\LaravelSimpleBlog;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LaravelSimpleBlogServiceProvider extends ServiceProvider {

    public function boot()
    {

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        //$this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        //$this->loadViewsFrom(__DIR__ . '/src/views', 'fantata');

        $this->publishes([
            __DIR__ . '/public' => public_path('vendor/fantata/blog'),
            __DIR__ . './views' => resource_path('views/vendor/fantata/blog'),
        ], 'public');

    }

    public function register() {

    }

}