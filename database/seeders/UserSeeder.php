<?php


// database/seeders/UserSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Tenant1 User',
            'email' => 'tenant1@example.com',
            'password' => Hash::make('password'),
            'tenant_id' => 'tenant1',
        ]);

        User::create([
            'name' => 'Tenant2 User',
            'email' => 'tenant2@example.com',
            'password' => Hash::make('password'),
            'tenant_id' => 'tenant2',
        ]);
    }
}
