<?php

use Illuminate\Database\Seeder;

class FacultyCourseSeeder extends Seeder
{
    public function run()
    {
        $facultyCourses = [
            // Faculty 1 (John Smith - CS Professor) teaches CS courses
            ['faculty_id' => 1, 'course_id' => 1, 'semester' => 'Fall 2025', 'year' => 2025],
            ['faculty_id' => 1, 'course_id' => 2, 'semester' => 'Spring 2025', 'year' => 2025],
            ['faculty_id' => 1, 'course_id' => 4, 'semester' => 'Fall 2025', 'year' => 2025],

            // Faculty 2 (Kim Johnson - CS Associate Professor)
            ['faculty_id' => 2, 'course_id' => 3, 'semester' => 'Fall 2025', 'year' => 2025],
            ['faculty_id' => 2, 'course_id' => 5, 'semester' => 'Spring 2025', 'year' => 2025],

            // Faculty 3 (Mary - Math department)
            ['faculty_id' => 3, 'course_id' => 6, 'semester' => 'Fall 2025', 'year' => 2025],
            ['faculty_id' => 3, 'course_id' => 7, 'semester' => 'Spring 2025', 'year' => 2025],

            // Faculty 4 (David - Physics)
            ['faculty_id' => 4, 'course_id' => 10, 'semester' => 'Fall 2025', 'year' => 2025],
            ['faculty_id' => 4, 'course_id' => 11, 'semester' => 'Spring 2025', 'year' => 2025],

            // Faculty 5 (Sarah - Chemistry)
            ['faculty_id' => 5, 'course_id' => 13, 'semester' => 'Fall 2025', 'year' => 2025],
            ['faculty_id' => 5, 'course_id' => 14, 'semester' => 'Spring 2025', 'year' => 2025],

            // Faculty 6 (Michael - Biology)
            ['faculty_id' => 6, 'course_id' => 16, 'semester' => 'Fall 2025', 'year' => 2025],
            ['faculty_id' => 6, 'course_id' => 17, 'semester' => 'Spring 2025', 'year' => 2025],
        ];

        foreach ($facultyCourses as $facultyCourse) {
            if (!\App\FacultyCourse::where([
                'faculty_id' => $facultyCourse['faculty_id'],
                'course_id' => $facultyCourse['course_id'],
                'semester' => $facultyCourse['semester'],
                'year' => $facultyCourse['year']
            ])->exists()) {
                \App\FacultyCourse::create($facultyCourse);
            }
        }
    }
}
