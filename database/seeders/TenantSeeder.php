<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tenant;

class TenantSeeder extends Seeder
{
    public function run()
    {
        Tenant::create([
            'id' => 'tenant1',
            'data' => []
        ]);

        Tenant::create([
            'id' => 'tenant2',
            'data' => []
        ]);
    }
}
