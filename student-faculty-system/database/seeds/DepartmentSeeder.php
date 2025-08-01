<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'department_name' => 'Computer Science',
                'department_code' => 'CS',
            ],
            [
                'department_name' => 'Mathematics',
                'department_code' => 'MATH',
            ],
            [
                'department_name' => 'Physics',
                'department_code' => 'PHYS',
            ],
            [
                'department_name' => 'Chemistry',
                'department_code' => 'CHEM',
            ],
            [
                'department_name' => 'Biology',
                'department_code' => 'BIO',
            ],
        ];
        
        foreach ($departments as $department) {
            \App\Department::create($department);
        }
    }
}
