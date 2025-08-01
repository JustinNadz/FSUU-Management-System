<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use App\Department;
use App\User;

class FacultyController extends Controller
{
    public function index(Request $request)
    {
        $query = Faculty::with(['user', 'department']);

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->whereHas('user', function($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('username', 'like', "%{$search}%");
            })->orWhere('faculty_id', 'like', "%{$search}%");
        }

        // Department filter
        if ($request->filled('department')) {
            $query->where('department_id', $request->department);
        }

        // Position filter
        if ($request->filled('position')) {
            $query->where('position', $request->position);
        }

        $faculty = $query->paginate(15)->appends($request->query());
        return view('faculty.index', compact('faculty'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('faculty.create', compact('departments'));
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
            'position' => 'required',
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'faculty',
        ]);

        Faculty::create([
            'user_id' => $user->user_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'department_id' => $request->department_id,
            'position' => $request->position,
        ]);

        return redirect()->route('faculty.index')->with('success', 'Faculty member created successfully.');
    }

    public function show($id)
    {
        $faculty = Faculty::with(['user', 'department', 'facultyCourses.course'])->findOrFail($id);
        return view('faculty.show', compact('faculty'));
    }

    public function edit($id)
    {
        $faculty = Faculty::with('user')->findOrFail($id);
        $departments = Department::all();
        return view('faculty.edit', compact('faculty', 'departments'));
    }

    public function update(Request $request, $id)
    {
        $faculty = Faculty::with('user')->findOrFail($id);
        
        $request->validate([
            'username' => 'required|unique:users,username,' . $faculty->user->user_id . ',user_id',
            'email' => 'required|email|unique:users,email,' . $faculty->user->user_id . ',user_id',
            'password' => 'nullable|min:6',
            'first_name' => 'required',
            'last_name' => 'required',
            'department_id' => 'required|exists:departments,department_id',
            'position' => 'required',
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
        
        $faculty->user->update($userData);

        // Update faculty data
        $faculty->update([
            'department_id' => $request->department_id,
            'position' => $request->position,
        ]);

        return redirect()->route('faculty.show', $faculty->faculty_id)->with('success', 'Faculty member updated successfully.');
    }

    public function destroy($id)
    {
        $faculty = Faculty::findOrFail($id);
        $user = $faculty->user;
        $faculty->delete();
        $user->delete();

        return redirect()->route('faculty.index')->with('success', 'Faculty member deleted successfully.');
    }
}
