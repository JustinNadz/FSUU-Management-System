<?php

use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    public function run()
    {
        // Create additional faculty users first (only if they don't exist)
        $additionalFaculty = [
            ['username' => 'prof_mary', 'email' => 'mary@example.com', 'password' => bcrypt('password'), 'role' => 'faculty'],
            ['username' => 'prof_david', 'email' => 'david@example.com', 'password' => bcrypt('password'), 'role' => 'faculty'],
            ['username' => 'prof_sarah', 'email' => 'sarah@example.com', 'password' => bcrypt('password'), 'role' => 'faculty'],
            ['username' => 'prof_michael', 'email' => 'michael@example.com', 'password' => bcrypt('password'), 'role' => 'faculty'],
            ['username' => 'prof_lisa', 'email' => 'lisa@example.com', 'password' => bcrypt('password'), 'role' => 'faculty'],
        ];

        foreach ($additionalFaculty as $faculty) {
            if (!\App\User::where('username', $faculty['username'])->exists()) {
                \App\User::create($faculty);
            }
        }

        $facultyData = [
            // Faculty user (existing)
            [
                'user_id' => 2,
                'first_name' => 'John',
                'last_name' => 'Smith',
                'department_id' => 1,
                'position' => 'Professor',
            ],
            // Kim user (existing admin)
            [
                'user_id' => 4,
                'first_name' => 'Kim',
                'last_name' => 'Johnson',
                'department_id' => 1,
                'position' => 'Associate Professor',
            ],
        ];

        // Add faculty records for the additional users
        $userMappings = [
            'prof_mary' => ['first_name' => 'Mary', 'last_name' => 'Wilson', 'department_id' => 2, 'position' => 'Professor'],
            'prof_david' => ['first_name' => 'David', 'last_name' => 'Brown', 'department_id' => 3, 'position' => 'Associate Professor'],
            'prof_sarah' => ['first_name' => 'Sarah', 'last_name' => 'Davis', 'department_id' => 4, 'position' => 'Assistant Professor'],
            'prof_michael' => ['first_name' => 'Michael', 'last_name' => 'Miller', 'department_id' => 5, 'position' => 'Professor'],
            'prof_lisa' => ['first_name' => 'Lisa', 'last_name' => 'Garcia', 'department_id' => 1, 'position' => 'Assistant Professor'],
        ];

        foreach ($userMappings as $username => $data) {
            $user = \App\User::where('username', $username)->first();
            if ($user) {
                $facultyData[] = [
                    'user_id' => $user->user_id,
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'department_id' => $data['department_id'],
                    'position' => $data['position'],
                ];
            }
        }

        foreach ($facultyData as $faculty) {
            if (!\App\Faculty::where('user_id', $faculty['user_id'])->exists()) {
                \App\Faculty::create($faculty);
            }
        }
    }
}
