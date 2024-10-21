<?php

namespace YourName\OddEven;

use Illuminate\Support\ServiceProvider;

class OddEvenServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Bind the OddEven class to the service container
        $this->app->singleton(OddEven::class, function () {
            return new OddEven();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // You can add routes, views, migrations, etc., if needed
    }
}
