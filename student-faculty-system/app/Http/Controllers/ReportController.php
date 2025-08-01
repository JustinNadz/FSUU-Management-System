<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Faculty;
use App\Course;
use App\Department;
use App\StudentCourse;
use App\FacultyCourse;
use App\Report;
use DB;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (auth()->user()->role !== 'admin') {
                abort(403, 'Unauthorized access.');
            }
            return $next($request);
        });
    }

    public function index()
    {
        // Summary statistics
        $totalStudents = Student::count();
        $totalFaculty = Faculty::count();
        $totalCourses = Course::count();
        $totalDepartments = Department::count();
        
        // Students by department
        $studentsByDepartment = Department::withCount('students')->get();
        
        // Faculty by department
        $facultyByDepartment = Department::withCount('faculty')->get();
        
        // Course enrollment statistics
        $courseEnrollment = Course::select('courses.*', DB::raw('COUNT(student_courses.student_id) as enrollment_count'))
            ->leftJoin('student_courses', 'courses.course_id', '=', 'student_courses.course_id')
            ->with('department')
            ->groupBy('courses.course_id')
            ->orderBy('enrollment_count', 'desc')
            ->get();
        
        // Student status distribution
        $studentStatusStats = Student::select('status', DB::raw('COUNT(*) as count'))
            ->groupBy('status')
            ->get();
        
        // Faculty position distribution
        $facultyPositionStats = Faculty::select('position', DB::raw('COUNT(*) as count'))
            ->groupBy('position')
            ->get();
        
        // GPA statistics
        $gpaStats = Student::select(
            DB::raw('AVG(gpa) as average_gpa'),
            DB::raw('MIN(gpa) as min_gpa'),
            DB::raw('MAX(gpa) as max_gpa'),
            DB::raw('COUNT(CASE WHEN gpa >= 3.5 THEN 1 END) as honors_students')
        )->first();
        
        // Recent activities
        $recentStudents = Student::with('user', 'department')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        
        $recentFaculty = Faculty::with('user', 'department')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        
        return view('reports.index', compact(
            'totalStudents',
            'totalFaculty', 
            'totalCourses',
            'totalDepartments',
            'studentsByDepartment',
            'facultyByDepartment',
            'courseEnrollment',
            'studentStatusStats',
            'facultyPositionStats',
            'gpaStats',
            'recentStudents',
            'recentFaculty'
        ));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
