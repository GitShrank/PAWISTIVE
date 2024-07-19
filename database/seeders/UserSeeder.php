<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tenant;

class UserSeeder extends Seeder
{
    public function run()
    {
        $tenant1 = Tenant::find('tenant1');
        if ($tenant1) {
            User::create([
                'name' => 'Tenant1 User',
                'email' => 'user1@tenant1.localhost',
                'password' => bcrypt('password'),
                'tenant_id' => $tenant1->id,
            ]);
        }

        $tenant2 = Tenant::find('tenant2');
        if ($tenant2) {
            User::create([
                'name' => 'Tenant2 User',
                'email' => 'user2@tenant2.localhost',
                'password' => bcrypt('password'),
                'tenant_id' => $tenant2->id,
            ]);
        }
    }
}
