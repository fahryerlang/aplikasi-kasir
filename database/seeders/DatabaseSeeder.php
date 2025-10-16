<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@test.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Create Kasir User
        User::create([
            'name' => 'Kasir User',
            'email' => 'kasir@test.com',
            'password' => Hash::make('password'),
            'role' => 'petugas_kasir',
        ]);

        // Create Pembeli User
        User::create([
            'name' => 'Pembeli User',
            'email' => 'pembeli@test.com',
            'password' => Hash::make('password'),
            'role' => 'pembeli',
        ]);

        $this->command->info('Default users created successfully!');
    }
}
