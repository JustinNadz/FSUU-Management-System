<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin user
        \App\User::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);
        
        // Create faculty user
        \App\User::create([
            'username' => 'faculty',
            'email' => 'faculty@example.com',
            'password' => bcrypt('password'),
            'role' => 'faculty',
        ]);
        
        // Create student users
        $studentUsers = [
            ['username' => 'student', 'email' => 'student@example.com', 'password' => bcrypt('password'), 'role' => 'student'],
            ['username' => 'student_bob', 'email' => 'bob@student.edu', 'password' => bcrypt('password'), 'role' => 'student'],
            ['username' => 'student_carol', 'email' => 'carol@student.edu', 'password' => bcrypt('password'), 'role' => 'student'],
            ['username' => 'student_daniel', 'email' => 'daniel@student.edu', 'password' => bcrypt('password'), 'role' => 'student'],
            ['username' => 'student_emma', 'email' => 'emma@student.edu', 'password' => bcrypt('password'), 'role' => 'student'],
            ['username' => 'student_frank', 'email' => 'frank@student.edu', 'password' => bcrypt('password'), 'role' => 'student'],
            ['username' => 'student_grace', 'email' => 'grace@student.edu', 'password' => bcrypt('password'), 'role' => 'student'],
            ['username' => 'student_henry', 'email' => 'henry@student.edu', 'password' => bcrypt('password'), 'role' => 'student'],
            ['username' => 'student_iris', 'email' => 'iris@student.edu', 'password' => bcrypt('password'), 'role' => 'student'],
            ['username' => 'student_jack', 'email' => 'jack@student.edu', 'password' => bcrypt('password'), 'role' => 'student'],
            ['username' => 'student_kelly', 'email' => 'kelly@student.edu', 'password' => bcrypt('password'), 'role' => 'student'],
        ];

        foreach ($studentUsers as $user) {
            \App\User::create($user);
        }
    }
}
