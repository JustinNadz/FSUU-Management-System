<?php

use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    public function run()
    {
        $reports = [
            [
                'title' => 'Fall 2025 Enrollment Report',
                'report_type' => 'enrollment',
                'category' => 'academic',
                'created_by' => 1, // admin user
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'GPA Distribution Report',
                'report_type' => 'academic',
                'category' => 'student',
                'created_by' => 1, // admin user
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Faculty Course Load Report',
                'report_type' => 'faculty',
                'category' => 'workload',
                'created_by' => 4, // kim user
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Department Performance Report',
                'report_type' => 'department',
                'category' => 'performance',
                'created_by' => 1, // admin user
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Student Graduation Tracking',
                'report_type' => 'student',
                'category' => 'graduation',
                'created_by' => 1, // admin user
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($reports as $report) {
            if (!\App\Report::where('title', $report['title'])->exists()) {
                \App\Report::create($report);
            }
        }
    }
}
