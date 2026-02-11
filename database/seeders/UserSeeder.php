<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create Owner
        User::create([
            'name' => 'Juan Dela Cruz',
            'email' => 'owner@lsvision.com',
            'password' => Hash::make('password'),
            'role' => 'owner',
            'department' => 'enterprise',
            'email_verified_at' => now(),
        ]);

        // Create Co-Admin (Wife)
        User::create([
            'name' => 'Maria Dela Cruz',
            'email' => 'coadmin@lsvision.com',
            'password' => Hash::make('password'),
            'role' => 'co_admin',
            'department' => 'enterprise',
            'email_verified_at' => now(),
        ]);

        // Create Resort Manager
        User::create([
            'name' => 'Roberto Santos',
            'email' => 'resort@lsvision.com',
            'password' => Hash::make('password'),
            'role' => 'resort_manager',
            'department' => 'shyren_bugak',
            'email_verified_at' => now(),
        ]);

        // Create Hotel Manager
        User::create([
            'name' => 'Anna Lim',
            'email' => 'hotel@lsvision.com',
            'password' => Hash::make('password'),
            'role' => 'hotel_manager',
            'department' => 'lsv_hotel',
            'email_verified_at' => now(),
        ]);

        // Create Agri Manager
        User::create([
            'name' => 'Pedro Reyes',
            'email' => 'agri@lsvision.com',
            'password' => Hash::make('password'),
            'role' => 'agri_manager',
            'department' => 'lsv_agri',
            'email_verified_at' => now(),
        ]);
    }
}