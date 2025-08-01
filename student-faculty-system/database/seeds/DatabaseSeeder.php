<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(FacultySeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(FacultyCourseSeeder::class);
        $this->call(StudentCourseSeeder::class);
        $this->call(ReportSeeder::class);
    }
}
