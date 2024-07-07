<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TenantServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerTenancy();
    }

    public function boot()
    {
        // Other boot methods if necessary
    }

    protected function registerTenancy()
    {
        $this->app->register(\Stancl\Tenancy\TenancyServiceProvider::class);
        $this->app->register(\Stancl\Tenancy\Database\DatabaseServiceProvider::class);
    }
}
