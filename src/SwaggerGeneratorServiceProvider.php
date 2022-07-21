<?php

namespace InfyOm\SwaggerGenerator;

use Illuminate\Support\ServiceProvider;

class SwaggerGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'swagger-generator');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
