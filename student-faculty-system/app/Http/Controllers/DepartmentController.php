<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::withCount(['students', 'faculty', 'courses'])->paginate(10);
        return view('departments.index', compact('departments'));
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'department_name' => 'required|string|max:255|unique:departments',
            'department_code' => 'required|string|max:10|unique:departments',
            'department_head' => 'nullable|string|max:255',
            'description' => 'nullable|string'
        ]);

        Department::create($request->all());

        return redirect()->route('departments.index')
            ->with('success', 'Department created successfully.');
    }

    public function show(Department $department)
    {
        $department->load(['students', 'faculty', 'courses']);
        return view('departments.show', compact('department'));
    }

    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'department_name' => 'required|string|max:255|unique:departments,department_name,' . $department->department_id . ',department_id',
            'department_head' => 'nullable|string|max:255',
            'description' => 'nullable|string'
        ]);

        $department->update($request->all());

        return redirect()->route('departments.show', $department->department_id)
            ->with('success', 'Department updated successfully.');
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('departments.index')
            ->with('success', 'Department deleted successfully.');
    }
}
