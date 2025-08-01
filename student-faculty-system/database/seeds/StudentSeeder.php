<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $studentData = [
            [
                'user_id' => 3, // student user
                'first_name' => 'Alice',
                'last_name' => 'Williams',
                'address' => '123 Main St, City, State',
                'age' => 20,
                'phone_number' => '555-0101',
                'major' => 'Computer Science',
                'gpa' => 3.75,
                'department_id' => 1,
                'status' => 'active',
            ],
        ];

        // Create additional student users
        $additionalStudents = [
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

        $addresses = [
            '456 Oak Ave, Springfield, IL',
            '789 Pine Rd, Portland, OR',
            '321 Elm St, Austin, TX',
            '654 Maple Dr, Denver, CO',
            '987 Cedar Ln, Seattle, WA',
            '147 Birch Ct, Miami, FL',
            '258 Willow Way, Boston, MA',
            '369 Ash Blvd, Phoenix, AZ',
            '741 Poplar St, Atlanta, GA',
            '852 Spruce Ave, San Diego, CA',
        ];

        $majors = ['Computer Science', 'Mathematics', 'Physics', 'Chemistry', 'Biology'];
        $statuses = ['active', 'active', 'active', 'inactive', 'graduated'];

        $userIdCounter = 10; // Starting after faculty users
        foreach ($additionalStudents as $index => $student) {
            \App\User::create($student);
            
            $studentData[] = [
                'user_id' => $userIdCounter,
                'first_name' => ucfirst(explode('_', $student['username'])[1]),
                'last_name' => ucfirst(explode('@', $student['email'])[0]),
                'address' => $addresses[$index],
                'age' => rand(18, 25),
                'phone_number' => '555-' . str_pad(rand(1000, 9999), 4, '0', STR_PAD_LEFT),
                'major' => $majors[rand(0, 4)],
                'gpa' => round(rand(250, 400) / 100, 2),
                'department_id' => rand(1, 5),
                'status' => $statuses[rand(0, 4)],
            ];
            $userIdCounter++;
        }

        foreach ($studentData as $student) {
            \App\Student::create($student);
        }
    }
}
