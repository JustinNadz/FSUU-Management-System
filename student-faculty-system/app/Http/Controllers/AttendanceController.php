<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\StudentCourse;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::with(['enrollment.student', 'enrollment.course', 'recordedBy'])->paginate(15);
        return view('attendance.index', compact('attendances'));
    }

    public function create()
    {
        $enrollments = StudentCourse::with(['student', 'course'])->get();
        return view('attendance.create', compact('enrollments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'enrollment_id' => 'required|exists:student_courses,enrollment_id',
            'date' => 'required|date',
            'status' => 'required|in:present,absent,excused,late',
            'notes' => 'nullable|string'
        ]);

        $attendance = Attendance::create([
            'enrollment_id' => $request->enrollment_id,
            'date' => $request->date,
            'status' => $request->status,
            'notes' => $request->notes,
            'recorded_by' => Auth::id(),
            'recorded_at' => now()
        ]);

        return redirect()->route('attendance.index')->with('success', 'Attendance recorded successfully.');
    }

    public function show(Attendance $attendance)
    {
        $attendance->load(['enrollment.student', 'enrollment.course', 'recordedBy']);
        return view('attendance.show', compact('attendance'));
    }

    public function edit(Attendance $attendance)
    {
        $enrollments = StudentCourse::with(['student', 'course'])->get();
        return view('attendance.edit', compact('attendance', 'enrollments'));
    }

    public function update(Request $request, Attendance $attendance)
    {
        $request->validate([
            'enrollment_id' => 'required|exists:student_courses,enrollment_id',
            'date' => 'required|date',
            'status' => 'required|in:present,absent,excused,late',
            'notes' => 'nullable|string'
        ]);

        $attendance->update([
            'enrollment_id' => $request->enrollment_id,
            'date' => $request->date,
            'status' => $request->status,
            'notes' => $request->notes
        ]);

        return redirect()->route('attendance.index')->with('success', 'Attendance updated successfully.');
    }

    public function destroy(Attendance $attendance)
    {
        $attendance->delete();
        return redirect()->route('attendance.index')->with('success', 'Attendance deleted successfully.');
    }

    public function byStudent($studentId)
    {
        $attendances = Attendance::whereHas('enrollment', function($query) use ($studentId) {
            $query->where('student_id', $studentId);
        })->with(['enrollment.course', 'recordedBy'])->paginate(15);

        return view('attendance.by-student', compact('attendances'));
    }

    public function byCourse($courseId)
    {
        $attendances = Attendance::whereHas('enrollment', function($query) use ($courseId) {
            $query->where('course_id', $courseId);
        })->with(['enrollment.student', 'recordedBy'])->paginate(15);

        return view('attendance.by-course', compact('attendances'));
    }
} 