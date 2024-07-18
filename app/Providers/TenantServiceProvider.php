<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class TenantServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (app()->bound('tenant')) { // Check if tenant is registered
            $tenant = app('tenant'); // Retrieve the tenant instance from the container

            if ($tenant) {
                Config::set('database.connections.tenant', [
                    'driver' => 'mysql',
                    'host' => env('DB_HOST', '127.0.0.1'),
                    'port' => env('DB_PORT', '3306'),
                    'database' => $tenant->data['database'], // Adjust based on your tenant model's database field
                    'username' => env('DB_USERNAME', 'root'),
                    'password' => env('DB_PASSWORD', ''),
                    'charset' => 'utf8mb4',
                    'collation' => 'utf8mb4_unicode_ci',
                    'prefix' => '',
                    'strict' => true,
                    'engine' => null,
                ]);

                DB::setDefaultConnection('tenant');
            }
        }
    }

    public function register()
    {
        //
    }
}
