<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Stancl\Tenancy\Database\Models\Domain;
use App\Models\Tenant;

class DomainsTableSeeder extends Seeder
{
    public function run()
    {
        $tenant1 = Tenant::find('tenant1');
        if ($tenant1) {
            echo "Seeding domain for tenant1\n";
            $tenant1->domains()->create(['domain' => 'tenant1.localhost']);
        } else {
            echo "Tenant1 not found\n";
        }

        $tenant2 = Tenant::find('tenant2');
        if ($tenant2) {
            echo "Seeding domain for tenant2\n";
            $tenant2->domains()->create(['domain' => 'tenant2.localhost']);
        } else {
            echo "Tenant2 not found\n";
        }
    }
}
