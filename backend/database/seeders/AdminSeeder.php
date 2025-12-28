<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Get admin credentials from environment variables
        $adminName = env('ADMIN_NAME', 'admin');
        $adminEmail = env('ADMIN_EMAIL', 'admin@fsuu.edu.ph');
        $adminPassword = env('ADMIN_PASSWORD');

        if (!$adminPassword) {
            $this->command->error('ADMIN_PASSWORD environment variable is required!');
            $this->command->info('Add ADMIN_PASSWORD=your_password to your .env file');
            return;
        }

        User::updateOrCreate(
            ['email' => $adminEmail],
            [
                'name' => $adminName,
                'email' => $adminEmail,
                'role' => 'admin',
                'status' => 'active',
                'password' => Hash::make($adminPassword),
            ]
        );

        $this->command->info("Admin user created/updated successfully!");
        $this->command->info("Username: {$adminName}");
    }
}
