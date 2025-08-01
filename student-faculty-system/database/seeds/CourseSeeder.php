<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $courses = [
            // Computer Science Courses
            [
                'course_name' => 'Introduction to Programming',
                'course_code' => 'CS101',
                'credits' => 3,
                'department_id' => 1,
                'status' => 'active',
            ],
            [
                'course_name' => 'Data Structures and Algorithms',
                'course_code' => 'CS201',
                'credits' => 4,
                'department_id' => 1,
                'status' => 'active',
            ],
            [
                'course_name' => 'Database Systems',
                'course_code' => 'CS301',
                'credits' => 3,
                'department_id' => 1,
                'status' => 'active',
            ],
            [
                'course_name' => 'Software Engineering',
                'course_code' => 'CS401',
                'credits' => 4,
                'department_id' => 1,
                'status' => 'active',
            ],
            [
                'course_name' => 'Machine Learning',
                'course_code' => 'CS402',
                'credits' => 3,
                'department_id' => 1,
                'status' => 'active',
            ],

            // Mathematics Courses
            [
                'course_name' => 'Calculus I',
                'course_code' => 'MATH101',
                'credits' => 4,
                'department_id' => 2,
                'status' => 'active',
            ],
            [
                'course_name' => 'Linear Algebra',
                'course_code' => 'MATH201',
                'credits' => 3,
                'department_id' => 2,
                'status' => 'active',
            ],
            [
                'course_name' => 'Statistics',
                'course_code' => 'MATH301',
                'credits' => 3,
                'department_id' => 2,
                'status' => 'active',
            ],
            [
                'course_name' => 'Differential Equations',
                'course_code' => 'MATH401',
                'credits' => 4,
                'department_id' => 2,
                'status' => 'active',
            ],

            // Physics Courses
            [
                'course_name' => 'General Physics I',
                'course_code' => 'PHYS101',
                'credits' => 4,
                'department_id' => 3,
                'status' => 'active',
            ],
            [
                'course_name' => 'General Physics II',
                'course_code' => 'PHYS102',
                'credits' => 4,
                'department_id' => 3,
                'status' => 'active',
            ],
            [
                'course_name' => 'Quantum Mechanics',
                'course_code' => 'PHYS301',
                'credits' => 4,
                'department_id' => 3,
                'status' => 'active',
            ],

            // Chemistry Courses
            [
                'course_name' => 'General Chemistry I',
                'course_code' => 'CHEM101',
                'credits' => 4,
                'department_id' => 4,
                'status' => 'active',
            ],
            [
                'course_name' => 'Organic Chemistry',
                'course_code' => 'CHEM201',
                'credits' => 4,
                'department_id' => 4,
                'status' => 'active',
            ],
            [
                'course_name' => 'Physical Chemistry',
                'course_code' => 'CHEM301',
                'credits' => 3,
                'department_id' => 4,
                'status' => 'active',
            ],

            // Biology Courses
            [
                'course_name' => 'Introduction to Biology',
                'course_code' => 'BIO101',
                'credits' => 4,
                'department_id' => 5,
                'status' => 'active',
            ],
            [
                'course_name' => 'Genetics',
                'course_code' => 'BIO201',
                'credits' => 3,
                'department_id' => 5,
                'status' => 'active',
            ],
            [
                'course_name' => 'Molecular Biology',
                'course_code' => 'BIO301',
                'credits' => 4,
                'department_id' => 5,
                'status' => 'active',
            ],
        ];

        foreach ($courses as $course) {
            \App\Course::create($course);
        }
    }
}
