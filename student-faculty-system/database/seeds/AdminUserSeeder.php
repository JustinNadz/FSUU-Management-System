<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Check if admin user exists, if not create one
        $adminUser = \App\User::where('username', 'admin')->first();
        
        if (!$adminUser) {
            \App\User::create([
                'username' => 'admin',
                'email' => 'admin@system.com',
                'password' => bcrypt('admin123'),
                'role' => 'admin'
            ]);
            echo "Admin user created successfully.\n";
        } else {
            // Update existing admin user password
            $adminUser->update([
                'password' => bcrypt('admin123'),
                'role' => 'admin'
            ]);
            echo "Admin user password updated successfully.\n";
        }
        
        echo "Admin Login Credentials:\n";
        echo "Username: admin\n";
        echo "Password: admin123\n";
    }
}
