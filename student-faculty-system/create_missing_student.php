<?php

require 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo "=== CREATING MISSING STUDENT USER ===\n";

// Check if user already exists
$existingUser = App\User::where('email', 'student@example.com')->first();
if ($existingUser) {
    echo "User with email 'student@example.com' already exists!\n";
    echo "ID: {$existingUser->user_id} | Username: {$existingUser->username} | Role: {$existingUser->role}\n";
    exit;
}

// Create the user
$user = new App\User();
$user->username = 'student';
$user->email = 'student@example.com';
$user->password = Hash::make('password');
$user->role = 'student';
$user->save();

echo "✓ Created user: ID {$user->user_id} | Username: {$user->username} | Email: {$user->email} | Role: {$user->role}\n";

// Test the password
if (Hash::check('password', $user->password)) {
    echo "✓ Password 'password' works correctly\n";
} else {
    echo "✗ Password 'password' does NOT work\n";
}
