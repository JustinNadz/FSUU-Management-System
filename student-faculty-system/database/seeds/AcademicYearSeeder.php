<?php

use Illuminate\Database\Seeder;

class AcademicYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create academic years
        \App\AcademicYear::create([
            'year_name' => '2023-2024',
            'start_date' => '2023-08-15',
            'end_date' => '2024-05-30',
            'status' => 'archived',
            'is_current' => false
        ]);

        \App\AcademicYear::create([
            'year_name' => '2024-2025',
            'start_date' => '2024-08-15',
            'end_date' => '2025-05-30',
            'status' => 'active',
            'is_current' => true
        ]);

        \App\AcademicYear::create([
            'year_name' => '2025-2026',
            'start_date' => '2025-08-15',
            'end_date' => '2026-05-30',
            'status' => 'inactive',
            'is_current' => false
        ]);
    }
}
