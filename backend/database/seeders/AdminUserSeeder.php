<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'admin@example.com')->orWhere('name','admin')->first();
        if ($user) {
            $user->update([
                'name' => 'admin',
                'role' => 'admin',
                'password' => Hash::make('admin123'),
            ]);
        } else {
            User::create([
                'name' => 'admin',
                'email' => 'admin@example.com',
                'role' => 'admin',
                'password' => Hash::make('admin123'),
            ]);
        }
    }
}
