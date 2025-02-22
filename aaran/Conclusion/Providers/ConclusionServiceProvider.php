<?php

namespace Aaran\Conclusion\Providers;

use Illuminate\Support\ServiceProvider;

class ConclusionServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->mergeConfigFrom(__DIR__ . '/../config.php','common');

        $this->app->register(ConclusionRouteServiceProvider::class);
    }

}
