<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function listDepartments(Request $request)
    {
        $rows = \DB::table('departments')->orderBy('code')->get();
        return response()->json($rows);
    }

    public function listCourses(Request $request)
    {
        $rows = \DB::table('courses')->orderBy('code')->get();
        return response()->json($rows);
    }

    public function listAcademicYears(Request $request)
    {
        $rows = \DB::table('academic_years')->orderBy('year','desc')->get();
        return response()->json($rows);
    }
    public function createDepartment(Request $request)
    {
        $data = $request->validate([
            'code' => ['required','string','max:16','unique:departments,code'],
            'name' => ['required','string','max:128'],
        ]);
        $dep = \DB::table('departments')->insertGetId([
            'code' => $data['code'],
            'name' => $data['name'],
            'status' => 'Active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return response()->json(['id' => $dep, 'code' => $data['code'], 'name' => $data['name'], 'status' => 'Active'], 201);
    }

    public function createCourse(Request $request)
    {
        // Validate formats first (no unique yet for upsert behavior)
        $data = $request->validate([
            'code' => ['required','string','max:32'],
            'name' => ['required','string','max:128'],
            'department_code' => ['nullable','string','max:16'],
        ]);

        $existing = \DB::table('courses')->where('code', $data['code'])->first();
        if ($existing) {
            \DB::table('courses')->where('id', $existing->id)->update([
                'name' => $data['name'],
                'department_code' => $data['department_code'] ?? $existing->department_code,
                'status' => 'Active',
                'updated_at' => now(),
            ]);
            $updated = \DB::table('courses')->where('id', $existing->id)->first();
            return response()->json([
                'id' => $updated->id,
                'code' => $updated->code,
                'name' => $updated->name,
                'department_code' => $updated->department_code,
                'status' => $updated->status,
            ], 200);
        }

        // Enforce uniqueness for new record
        $request->validate([ 'code' => ['required','string','max:32','unique:courses,code'] ]);
        $id = \DB::table('courses')->insertGetId([
            'code' => $data['code'],
            'name' => $data['name'],
            'department_code' => $data['department_code'] ?? null,
            'status' => 'Active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return response()->json(['id' => $id] + $data + ['status' => 'Active'], 201);
    }

    public function createAcademicYear(Request $request)
    {
        $data = $request->validate([
            'year' => ['required','string','max:32','unique:academic_years,year'],
        ]);
        $id = \DB::table('academic_years')->insertGetId([
            'year' => $data['year'],
            'status' => 'Active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return response()->json(['id' => $id, 'year' => $data['year'], 'status' => 'Active'], 201);
    }
    public function listStudents(Request $request)
    {
        $q = User::query()->where('role', 'student');
        if ($d = $request->query('department')) $q->where('department_code', $d);
        if ($c = $request->query('course')) $q->where('course_code', $c);
        if ($s = $request->query('search')) $q->where(function($qq) use ($s) {
            $qq->where('name', 'like', "%$s%")
               ->orWhere('student_id', 'like', "%$s%")
               ->orWhere('email', 'like', "%$s%");
        });
        return response()->json($q->orderBy('name')->get());
    }

    public function createStudent(Request $request)
    {
        // First pass: validate formats only (no unique constraints yet)
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'student_id' => ['required','string','max:32'],
            'department_code' => ['nullable','string','max:16'],
            'course_code' => ['nullable','string','max:16'],
            'status' => ['nullable','string','max:16'],
            'password' => ['nullable','string','min:6'],
        ]);
        // Reactivate if an archived student with same student_id or email exists
        $existing = User::where('role','student')
            ->where(function($q) use ($data) {
                $q->where('student_id', $data['student_id'])
                  ->orWhere('email', $data['email']);
            })->first();

        if ($existing) {
            $existing->fill([
                'name' => $data['name'],
                'email' => $data['email'],
                'student_id' => $data['student_id'],
                'department_code' => $data['department_code'] ?? $existing->department_code,
                'course_code' => $data['course_code'] ?? $existing->course_code,
                'status' => 'Active',
            ])->save();
            // If password provided on upsert, update it
            if (!empty($data['password'])) {
                $existing->password = \Hash::make($data['password']);
                $existing->save();
            }
            $existing->refresh();
            return response()->json([
                'user' => new UserResource($existing),
                'initial_password' => empty($data['password']) ? null : null,
            ], 200);
        }

        // For new record, enforce uniqueness now
        $request->validate([
            'email' => ['required','email','max:255','unique:users,email'],
            'student_id' => ['required','string','max:32','unique:users,student_id'],
        ]);
        $data['role'] = 'student';
        $generatedPlain = null;
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            $generatedPlain = Str::random(10);
            $data['password'] = Hash::make($generatedPlain);
        }
        $data['status'] = $data['status'] ?? 'Active';
        $created = User::create($data);
        $created->refresh();
        return response()->json([
            'user' => new UserResource($created),
            'initial_password' => $generatedPlain,
        ], 201);
    }

    public function updateStudent(Request $request, User $user)
    {
        abort_unless($user->role === 'student', 404);
        $data = $request->validate([
            'name' => ['sometimes','string','max:255'],
            'email' => ['sometimes','email','max:255', Rule::unique('users','email')->ignore($user->id)],
            'student_id' => ['sometimes','string','max:32', Rule::unique('users','student_id')->ignore($user->id)],
            'department_code' => ['nullable','string','max:16'],
            'course_code' => ['nullable','string','max:16'],
            'status' => ['nullable','string','max:16'],
        ]);
        $user->fill($data)->save();
        return new UserResource($user);
    }

    public function archiveStudent(User $user)
    {
        abort_unless($user->role === 'student', 404);
        $user->status = 'Inactive';
        $user->save();
        try { $user->tokens()->delete(); } catch (\Throwable $e) {}
        return response()->json(['status' => 'ok']);
    }

    public function restoreStudent(User $user)
    {
        abort_unless($user->role === 'student', 404);
        $user->status = 'Active';
        $user->save();
        return response()->json(['status' => 'ok']);
    }

    public function listFaculty(Request $request)
    {
        $q = User::query()->where('role', 'faculty');
        if ($d = $request->query('department')) $q->where('department_code', $d);
        if ($s = $request->query('search')) $q->where(function($qq) use ($s) {
            $qq->where('name', 'like', "%$s%")
               ->orWhere('employee_no', 'like', "%$s%")
               ->orWhere('email', 'like', "%$s%");
        });
        return response()->json($q->orderBy('name')->get());
    }

    public function createFaculty(Request $request)
    {
        // First pass: formats only
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'employee_no' => ['required','string','max:32'],
            'department_code' => ['nullable','string','max:16'],
            'status' => ['nullable','string','max:16'],
            'password' => ['nullable','string','min:6'],
        ]);
        // Reactivate if an archived faculty with same employee_no or email exists
        $existing = User::where('role','faculty')
            ->where(function($q) use ($data) {
                $q->where('employee_no', $data['employee_no'])
                  ->orWhere('email', $data['email']);
            })->first();

        if ($existing) {
            $existing->fill([
                'name' => $data['name'],
                'email' => $data['email'],
                'employee_no' => $data['employee_no'],
                'department_code' => $data['department_code'] ?? $existing->department_code,
                'status' => 'Active',
            ])->save();
            // If password provided on upsert, update it
            if (!empty($data['password'])) {
                $existing->password = \Hash::make($data['password']);
                $existing->save();
            }
            $existing->refresh();
            return response()->json([
                'user' => new UserResource($existing),
                'initial_password' => empty($data['password']) ? null : null,
            ], 200);
        }

        // For new record, enforce uniqueness now
        $request->validate([
            'email' => ['required','email','max:255','unique:users,email'],
            'employee_no' => ['required','string','max:32','unique:users,employee_no'],
        ]);
        $data['role'] = 'faculty';
        $generatedPlain = null;
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            $generatedPlain = Str::random(10);
            $data['password'] = Hash::make($generatedPlain);
        }
        $data['status'] = $data['status'] ?? 'Active';
        $created = User::create($data);
        $created->refresh();
        return response()->json([
            'user' => new UserResource($created),
            'initial_password' => $generatedPlain,
        ], 201);
    }

    public function updateFaculty(Request $request, User $user)
    {
        abort_unless($user->role === 'faculty', 404);
        $data = $request->validate([
            'name' => ['sometimes','string','max:255'],
            'email' => ['sometimes','email','max:255', Rule::unique('users','email')->ignore($user->id)],
            'employee_no' => ['sometimes','string','max:32', Rule::unique('users','employee_no')->ignore($user->id)],
            'department_code' => ['nullable','string','max:16'],
            'status' => ['nullable','string','max:16'],
        ]);
        $user->fill($data)->save();
        return new UserResource($user);
    }

    public function archiveFaculty(User $user)
    {
        abort_unless($user->role === 'faculty', 404);
        $user->status = 'Inactive';
        $user->save();
        try { $user->tokens()->delete(); } catch (\Throwable $e) {}
        return response()->json(['status' => 'ok']);
    }

    public function restoreFaculty(User $user)
    {
        abort_unless($user->role === 'faculty', 404);
        $user->status = 'Active';
        $user->save();
        return response()->json(['status' => 'ok']);
    }
}


