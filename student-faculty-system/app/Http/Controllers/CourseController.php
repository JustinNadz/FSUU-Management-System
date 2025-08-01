<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Department;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('department')->paginate(10);
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('courses.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'course_code' => 'required|unique:courses',
            'credits' => 'required|integer|min:1|max:6',
            'department_id' => 'required|exists:departments,department_id',
        ]);

        Course::create($request->all());

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function show($id)
    {
        $course = Course::with(['department', 'facultyCourses.faculty', 'studentCourses.student'])->findOrFail($id);
        return view('courses.show', compact('course'));
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $departments = Department::all();
        return view('courses.edit', compact('course', 'departments'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        
        $request->validate([
            'course_name' => 'required',
            'course_code' => 'required|unique:courses,course_code,' . $id . ',course_id',
            'credits' => 'required|integer|min:1|max:6',
            'department_id' => 'required|exists:departments,department_id',
        ]);

        $course->update($request->all());

        return redirect()->route('courses.show', $course->course_id)->with('success', 'Course updated successfully.');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
