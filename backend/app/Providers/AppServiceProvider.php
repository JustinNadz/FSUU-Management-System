<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register Sentry if DSN provided
        if (!empty(env('SENTRY_LARAVEL_DSN'))) {
            $this->app->register(\Sentry\Laravel\ServiceProvider::class);
        }
        // Conditionally register Telescope wrapper
        $this->app->register(\App\Providers\TelescopeServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Force mysql default if something external set an invalid driver (e.g. file)
        $default = config('database.default');
        if (!in_array($default, ['mysql','sqlite','pgsql','sqlsrv'])) {
            config(['database.default' => 'mysql']);
        }
        // If DATABASE_URL was set to file:./dev.db (common in some hosts), neutralize for mysql
        $mysqlUrl = config('database.connections.mysql.url');
        if (is_string($mysqlUrl) && stripos($mysqlUrl, 'file:') === 0) {
            config(['database.connections.mysql.url' => null]);
            // Also ensure driver stays mysql
            config(['database.connections.mysql.driver' => 'mysql']);
        }
    }
}
