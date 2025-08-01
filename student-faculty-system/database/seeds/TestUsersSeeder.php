<?php

use Illuminate\Database\Seeder;

class TestUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create/Update Admin User
        $admin = \App\User::updateOrCreate(
            ['username' => 'admin'],
            [
                'email' => 'admin@system.com',
                'password' => bcrypt('admin123'),
                'role' => 'admin'
            ]
        );

        // Create/Update Faculty Test User
        $facultyUser = \App\User::updateOrCreate(
            ['username' => 'faculty1'],
            [
                'email' => 'faculty1@system.com',
                'password' => bcrypt('faculty123'),
                'role' => 'faculty'
            ]
        );

        // Create Faculty record if user is faculty
        if ($facultyUser->role === 'faculty') {
            \App\Faculty::updateOrCreate(
                ['user_id' => $facultyUser->user_id],
                [
                    'first_name' => 'John',
                    'last_name' => 'Professor',
                    'department_id' => \App\Department::first()->department_id ?? 1,
                    'position' => 'Professor'
                ]
            );
        }

        // Create/Update Student Test User
        $studentUser = \App\User::updateOrCreate(
            ['username' => 'student1'],
            [
                'email' => 'student1@system.com',
                'password' => bcrypt('student123'),
                'role' => 'student'
            ]
        );

        // Create Student record if user is student
        if ($studentUser->role === 'student') {
            \App\Student::updateOrCreate(
                ['user_id' => $studentUser->user_id],
                [
                    'first_name' => 'Jane',
                    'last_name' => 'Student',
                    'department_id' => \App\Department::first()->department_id ?? 1,
                    'major' => 'Computer Science',
                    'status' => 'active'
                ]
            );
        }

        echo "Test Users Created/Updated:\n";
        echo "Admin - Username: admin, Password: admin123\n";
        echo "Faculty - Username: faculty1, Password: faculty123\n";
        echo "Student - Username: student1, Password: student123\n";
    }
}
