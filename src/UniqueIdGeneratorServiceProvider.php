<?php

namespace Devzero2in\LaravelUidGenerator;

use Illuminate\Support\ServiceProvider;

class UniqueIdGeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('unique-id-generator', function () {
            return new UniqueIdGenerator();
        });
    }

    public function boot()
    {
        // Publish configuration if needed
        $this->publishes([
            __DIR__.'/config/uniqueid.php' => config_path('uniqueid.php'),
        ], 'config');
    }
}