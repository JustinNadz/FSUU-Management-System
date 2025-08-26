<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Faculty;
use App\Course;
use App\Department;
use App\FacultyCourse;
use App\StudentCourse;
use Illuminate\Support\Facades\Auth;

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

    public function facultyDashboard()
    {
        $user = Auth::user();
        $faculty = Faculty::where('user_id', $user->user_id)->with(['department', 'facultyCourses.course'])->first();
        
        if (!$faculty) {
            return redirect('/login')->withErrors(['error' => 'Faculty profile not found.']);
        }

        $assignedCourses = $faculty->facultyCourses->count();
        $totalStudents = StudentCourse::whereIn('course_id', $faculty->facultyCourses->pluck('course_id'))->count();
        $departmentFaculty = Faculty::where('department_id', $faculty->department_id)->count();
        $departmentCourses = Course::where('department_id', $faculty->department_id)->count();

        return view('faculty-dashboard', compact(
            'faculty',
            'assignedCourses',
            'totalStudents',
            'departmentFaculty',
            'departmentCourses'
        ));
    }

    public function sectionOffering()
    {
        $user = Auth::user();
        $student = Student::where('user_id', $user->user_id)->with(['department'])->first();
        
        if (!$student) {
            return redirect('/login')->withErrors(['error' => 'Student profile not found.']);
        }

        // Just pass the student object for basic info, no dashboard data needed
        return view('section-offering', compact('student'));
    }
}
