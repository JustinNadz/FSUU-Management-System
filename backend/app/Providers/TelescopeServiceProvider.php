<?php

namespace App\Providers;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class TelescopeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Only register Telescope when explicitly enabled
        if (env('TELESCOPE_ENABLED', false)) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
        }
    }

    public function boot(): void
    {
        // No-op
    }
}


