<?php

namespace App\Http\Controllers;

use App\AcademicCalendar;
use App\Student;
use App\Course;
use App\AcademicYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcademicCalendarController extends Controller
{
    public function index()
    {
        $events = AcademicCalendar::with(['student', 'academicYear', 'course'])->paginate(15);
        return view('academic-calendar.index', compact('events'));
    }

    public function create()
    {
        $students = Student::all();
        $courses = Course::all();
        $academicYears = AcademicYear::all();
        return view('academic-calendar.create', compact('students', 'courses', 'academicYears'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,student_id',
            'academic_year_id' => 'nullable|exists:academic_years,academic_year_id',
            'Active_status' => 'nullable|string',
            'School_year' => 'nullable|date',
            'title' => 'required|string|max:100',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'course_id' => 'nullable|exists:courses,course_id'
        ]);

        AcademicCalendar::create($request->all());

        return redirect()->route('academic-calendar.index')->with('success', 'Calendar event created successfully.');
    }

    public function show(AcademicCalendar $academicCalendar)
    {
        $academicCalendar->load(['student', 'academicYear', 'course']);
        return view('academic-calendar.show', compact('academicCalendar'));
    }

    public function edit(AcademicCalendar $academicCalendar)
    {
        $students = Student::all();
        $courses = Course::all();
        $academicYears = AcademicYear::all();
        return view('academic-calendar.edit', compact('academicCalendar', 'students', 'courses', 'academicYears'));
    }

    public function update(Request $request, AcademicCalendar $academicCalendar)
    {
        $request->validate([
            'student_id' => 'required|exists:students,student_id',
            'academic_year_id' => 'nullable|exists:academic_years,academic_year_id',
            'Active_status' => 'nullable|string',
            'School_year' => 'nullable|date',
            'title' => 'required|string|max:100',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'course_id' => 'nullable|exists:courses,course_id'
        ]);

        $academicCalendar->update($request->all());

        return redirect()->route('academic-calendar.index')->with('success', 'Calendar event updated successfully.');
    }

    public function destroy(AcademicCalendar $academicCalendar)
    {
        $academicCalendar->delete();
        return redirect()->route('academic-calendar.index')->with('success', 'Calendar event deleted successfully.');
    }

    public function byStudent($studentId)
    {
        $events = AcademicCalendar::where('student_id', $studentId)
            ->with(['academicYear', 'course'])
            ->orderBy('start_date')
            ->get();

        return view('academic-calendar.by-student', compact('events'));
    }

    public function byYear($yearId)
    {
        $events = AcademicCalendar::where('academic_year_id', $yearId)
            ->with(['student', 'course'])
            ->orderBy('start_date')
            ->get();

        return view('academic-calendar.by-year', compact('events'));
    }

    public function calendar()
    {
        $events = AcademicCalendar::with(['student', 'course'])
            ->where('start_date', '>=', now()->startOfMonth())
            ->where('start_date', '<=', now()->endOfMonth())
            ->get();

        return view('academic-calendar.calendar', compact('events'));
    }
} 