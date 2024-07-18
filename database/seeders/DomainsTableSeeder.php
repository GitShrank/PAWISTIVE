<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tenant;

class DomainsTableSeeder extends Seeder
{
    public function run()
    {
        $tenant1 = Tenant::find('tenant1');
        if ($tenant1) {
            $tenant1->domains()->create(['domain' => 'tenant1.localhost']);
        } else {
            echo "Tenant1 not found\n";
        }

        $tenant2 = Tenant::find('tenant2');
        if ($tenant2) {
            $tenant2->domains()->create(['domain' => 'tenant2.localhost']);
        } else {
            echo "Tenant2 not found\n";
        }
    }
}
