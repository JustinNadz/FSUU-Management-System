<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class FacultyStudentSeeder extends Seeder {
    public function run(): void {
        User::updateOrCreate(
            ['employee_no' => 'F-001'],
            [ 'name' => 'Juan Dela Cruz','email' => 'faculty_f001@example.com','role' => 'faculty','password' => Hash::make('juan123'),'student_id' => null, ]
        );
        User::updateOrCreate(
            ['student_id' => 'S-2025-001'],
            [ 'name' => 'Anna Flores','email' => 'student_s2025_001@example.com','role' => 'student','password' => Hash::make('anna123'),'employee_no' => null, ]
        );
    }
}
