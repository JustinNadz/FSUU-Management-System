<?php

namespace App\Http\Controllers;

use App\CoursePrerequisite;
use App\Course;
use Illuminate\Http\Request;

class CoursePrerequisiteController extends Controller
{
    public function index()
    {
        $prerequisites = CoursePrerequisite::with(['course', 'requiredCourse'])->paginate(15);
        return view('course-prerequisites.index', compact('prerequisites'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('course-prerequisites.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,course_id',
            'requires_course_id' => 'required|exists:courses,course_id|different:course_id',
            'mandatory' => 'boolean',
            'notes' => 'nullable|string'
        ]);

        CoursePrerequisite::create($request->all());

        return redirect()->route('course-prerequisites.index')->with('success', 'Course prerequisite created successfully.');
    }

    public function show(CoursePrerequisite $coursePrerequisite)
    {
        $coursePrerequisite->load(['course', 'requiredCourse']);
        return view('course-prerequisites.show', compact('coursePrerequisite'));
    }

    public function edit(CoursePrerequisite $coursePrerequisite)
    {
        $courses = Course::all();
        return view('course-prerequisites.edit', compact('coursePrerequisite', 'courses'));
    }

    public function update(Request $request, CoursePrerequisite $coursePrerequisite)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,course_id',
            'requires_course_id' => 'required|exists:courses,course_id|different:course_id',
            'mandatory' => 'boolean',
            'notes' => 'nullable|string'
        ]);

        $coursePrerequisite->update($request->all());

        return redirect()->route('course-prerequisites.index')->with('success', 'Course prerequisite updated successfully.');
    }

    public function destroy(CoursePrerequisite $coursePrerequisite)
    {
        $coursePrerequisite->delete();
        return redirect()->route('course-prerequisites.index')->with('success', 'Course prerequisite deleted successfully.');
    }
} 