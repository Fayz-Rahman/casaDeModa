<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed reference data that powers the storefront landing page
        $this->call([
            CategorySeeder::class,
            BrandSeeder::class,
            ProductSeeder::class,
        ]);

        // Create an admin user without relying on factories/Faker (safe for --no-dev installs)
        User::updateOrCreate(
            ['email' => 'admin@watchstore.com'],
            [
                'name' => 'Admin',
                'email' => 'admin@watchstore.com',
                'password' => Hash::make(env('ADMIN_PASSWORD', 'change-me-please')),
            ]
        );
    }
}
