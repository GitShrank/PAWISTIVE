<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Stancl\Tenancy\Database\Models\Domain;
use App\Models\Tenant;

class DomainsTableSeeder extends Seeder
{
    public function run()
    {
        $tenant1 = Tenant::find(1);
        if ($tenant1) {
            $tenant1->domains()->create(['domain' => 'tenant1.localhost']);
        }

        $tenant2 = Tenant::find(2);
        if ($tenant2) {
            $tenant2->domains()->create(['domain' => 'tenant2.localhost']);
        }
    }
}
