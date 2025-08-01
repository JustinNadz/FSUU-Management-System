<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo "Existing users:\n";
$users = App\User::all(['username', 'email', 'role']);
foreach ($users as $user) {
    echo "- {$user->username} ({$user->email}) - Role: {$user->role}\n";
}

// Check if 'kim' user exists
$kimUser = App\User::where('username', 'kim')->first();
if (!$kimUser) {
    echo "\nUser 'kim' not found. Creating user...\n";
    
    App\User::create([
        'username' => 'kim',
        'email' => 'kim@example.com',
        'password' => bcrypt('password'),
        'role' => 'admin',
    ]);
    
    echo "User 'kim' created successfully with password 'password'\n";
} else {
    echo "\nUser 'kim' already exists.\n";
    echo "Updating password to 'password'...\n";
    
    $kimUser->update([
        'password' => bcrypt('password')
    ]);
    
    echo "Password updated successfully.\n";
}

echo "\nAll users after update:\n";
$users = App\User::all(['username', 'email', 'role']);
foreach ($users as $user) {
    echo "- {$user->username} ({$user->email}) - Role: {$user->role}\n";
}
