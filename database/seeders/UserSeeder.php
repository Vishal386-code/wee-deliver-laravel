<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Agent',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'superadmin'
        ]);

        User::create([
            'name' => 'Vendor',
            'email' => 'vendor@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'vendor'
        ]);
        User::create([
            'name' => 'Courier',
            'email' => 'courier@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'courier'
        ]);
        User::create([
            'name' => 'Client',
            'email' => 'client@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'client'
        ]);
    }
}
