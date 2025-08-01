<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Department;
use App\User;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $query = Student::with(['user', 'department']);

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->whereHas('user', function($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('username', 'like', "%{$search}%");
            })->orWhere('student_id', 'like', "%{$search}%");
        }

        // Department filter
        if ($request->filled('department')) {
            $query->where('department_id', $request->department);
        }

        // Status filter
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Major filter
        if ($request->filled('major')) {
            $query->where('major', $request->major);
        }

        $students = $query->paginate(15)->appends($request->query());
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('students.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'first_name' => 'required',
            'last_name' => 'required',
            'department_id' => 'required|exists:departments,department_id',
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'student',
        ]);

        Student::create([
            'user_id' => $user->user_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'age' => $request->age,
            'phone_number' => $request->phone_number,
            'major' => $request->major,
            'gpa' => $request->gpa,
            'department_id' => $request->department_id,
            'status' => $request->status ?? 'active',
        ]);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function show($id)
    {
        $student = Student::with(['user', 'department', 'studentCourses.course'])->findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::with('user')->findOrFail($id);
        $departments = Department::all();
        return view('students.edit', compact('student', 'departments'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::with('user')->findOrFail($id);
        
        $request->validate([
            'username' => 'required|unique:users,username,' . $student->user->user_id . ',user_id',
            'email' => 'required|email|unique:users,email,' . $student->user->user_id . ',user_id',
            'password' => 'nullable|min:6',
            'first_name' => 'required',
            'last_name' => 'required',
            'department_id' => 'required|exists:departments,department_id',
        ]);

        // Update user data
        $userData = [
            'username' => $request->username,
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ];
        
        if ($request->filled('password')) {
            $userData['password'] = bcrypt($request->password);
        }
        
        $student->user->update($userData);

        // Update student data
        $student->update([
            'address' => $request->address,
            'age' => $request->age,
            'phone_number' => $request->phone_number,
            'major' => $request->major,
            'gpa' => $request->gpa,
            'department_id' => $request->department_id,
            'status' => $request->status,
        ]);

        return redirect()->route('students.show', $student->student_id)->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $user = $student->user;
        $student->delete();
        $user->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
