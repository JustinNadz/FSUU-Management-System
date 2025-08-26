<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Faculty;
use App\Course;
use App\Department;

class DashboardController extends Controller
{
    public function index()
    {
        $totalStudents = Student::count();
        $totalFaculty = Faculty::count();
        $totalCourses = Course::count();
        $totalDepartments = Department::count();
        
        // Get students per course
        $studentsPerCourse = Course::withCount('studentCourses')->get();
        
        // Get faculty per department
        $facultyPerDepartment = Department::withCount('faculty')->get();
        
        return view('dashboard', compact(
            'totalStudents', 
            'totalFaculty', 
            'totalCourses', 
            'totalDepartments',
            'studentsPerCourse',
            'facultyPerDepartment'
        ));
    }
}
