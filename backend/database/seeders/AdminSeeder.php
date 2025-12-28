<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Create admin user with simple credentials
        User::updateOrCreate(
            ['email' => 'admin@fsuu.edu.ph'],
            [
                'name' => 'admin',
                'email' => 'admin@fsuu.edu.ph',
                'role' => 'admin',
                'status' => 'active',
                'password' => Hash::make('Admin123!'),
            ]
        );

        echo "Admin user created/updated successfully!\n";
        echo "Username: admin\n";
        echo "Password: Admin123!\n";
    }
}
