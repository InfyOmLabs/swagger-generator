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
        $this->publishes([
            __DIR__.'/../views' => resource_path('views/vendor/swagger-generator'),
        ], 'swagger-generator-templates');
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
