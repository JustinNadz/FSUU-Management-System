<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index()
    {
        // Mock data for demonstration - you can replace this with actual database queries
        $studentInfo = [
            'name' => 'Student',
            'course' => 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY',
            'status' => 'OLD (Regular) (15 Unit(s) Allowed)',
            'school_year' => '2025-2026',
            'student_no' => '2025-00001',
            'year_level' => 'Third Year',
            'section' => 'BSIT-3A',
            'semester' => 'First'
        ];

        return view('registration', compact('studentInfo'));
    }
}
