<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tenant;

class TenantSeeder extends Seeder
{
    public function run()
    {
        Tenant::create([
            'id' => 1,
            'data' => ['name' => 'Tenant 1', 'domain' => 'tenant1.localhost']
        ]);

        Tenant::create([
            'id' => 2,
            'data' => ['name' => 'Tenant 2', 'domain' => 'tenant2.localhost']
        ]);
    }
}
