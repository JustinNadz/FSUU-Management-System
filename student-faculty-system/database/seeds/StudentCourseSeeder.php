<?php

use Illuminate\Database\Seeder;

class StudentCourseSeeder extends Seeder
{
    public function run()
    {
        $studentCourses = [
            // Alice (Student 1) - CS Major
            ['student_id' => 1, 'course_id' => 1, 'semester' => 'Fall 2025', 'year' => 2025, 'grade' => 'A-'],
            ['student_id' => 1, 'course_id' => 6, 'semester' => 'Fall 2025', 'year' => 2025, 'grade' => 'B+'],
            ['student_id' => 1, 'course_id' => 2, 'semester' => 'Spring 2025', 'year' => 2025, 'grade' => 'A'],

            // Bob (Student 2)
            ['student_id' => 2, 'course_id' => 1, 'semester' => 'Fall 2025', 'year' => 2025, 'grade' => 'B'],
            ['student_id' => 2, 'course_id' => 10, 'semester' => 'Fall 2025', 'year' => 2025, 'grade' => 'B-'],
            ['student_id' => 2, 'course_id' => 7, 'semester' => 'Spring 2025', 'year' => 2025, 'grade' => 'C+'],

            // Carol (Student 3)
            ['student_id' => 3, 'course_id' => 6, 'semester' => 'Fall 2025', 'year' => 2025, 'grade' => 'A'],
            ['student_id' => 3, 'course_id' => 8, 'semester' => 'Fall 2025', 'year' => 2025, 'grade' => 'A-'],
            ['student_id' => 3, 'course_id' => 9, 'semester' => 'Spring 2025', 'year' => 2025, 'grade' => 'B+'],

            // Daniel (Student 4)
            ['student_id' => 4, 'course_id' => 12, 'semester' => 'Fall 2025', 'year' => 2025, 'grade' => 'B'],
            ['student_id' => 4, 'course_id' => 13, 'semester' => 'Spring 2025', 'year' => 2025, 'grade' => 'B-'],

            // Emma (Student 5)
            ['student_id' => 5, 'course_id' => 15, 'semester' => 'Fall 2025', 'year' => 2025, 'grade' => 'A'],
            ['student_id' => 5, 'course_id' => 16, 'semester' => 'Spring 2025', 'year' => 2025, 'grade' => 'A-'],

            // Frank (Student 6)
            ['student_id' => 6, 'course_id' => 1, 'semester' => 'Fall 2025', 'year' => 2025, 'grade' => 'C'],
            ['student_id' => 6, 'course_id' => 6, 'semester' => 'Fall 2025', 'year' => 2025, 'grade' => 'C+'],

            // Grace (Student 7)
            ['student_id' => 7, 'course_id' => 10, 'semester' => 'Fall 2025', 'year' => 2025, 'grade' => 'B+'],
            ['student_id' => 7, 'course_id' => 11, 'semester' => 'Spring 2025', 'year' => 2025, 'grade' => 'A-'],

            // Henry (Student 8)
            ['student_id' => 8, 'course_id' => 2, 'semester' => 'Spring 2025', 'year' => 2025, 'grade' => 'B'],
            ['student_id' => 8, 'course_id' => 3, 'semester' => 'Fall 2025', 'year' => 2025, 'grade' => 'B-'],

            // Iris (Student 9)
            ['student_id' => 9, 'course_id' => 17, 'semester' => 'Fall 2025', 'year' => 2025, 'grade' => 'A'],
            ['student_id' => 9, 'course_id' => 18, 'semester' => 'Spring 2025', 'year' => 2025, 'grade' => 'A-'],

            // Jack (Student 10)
            ['student_id' => 10, 'course_id' => 4, 'semester' => 'Fall 2025', 'year' => 2025, 'grade' => 'B+'],
            ['student_id' => 10, 'course_id' => 5, 'semester' => 'Spring 2025', 'year' => 2025, 'grade' => 'A'],

            // Kelly (Student 11)
            ['student_id' => 11, 'course_id' => 14, 'semester' => 'Fall 2025', 'year' => 2025, 'grade' => 'B'],
            ['student_id' => 11, 'course_id' => 15, 'semester' => 'Spring 2025', 'year' => 2025, 'grade' => 'B+'],
        ];

        foreach ($studentCourses as $studentCourse) {
            \App\StudentCourse::create($studentCourse);
        }
    }
}
