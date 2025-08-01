@extends('layouts.app')

@section('title', 'Students')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Students Management</h3>
                    <a href="{{ route('students.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add New Student
                    </a>
                </div>
                
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <!-- Search and Filter Section -->
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">Search & Filter Students</h6>
                                </div>
                                <div class="card-body">
                                    <form method="GET" action="{{ route('students.index') }}">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="search" class="form-label">Search Student</label>
                                                <input type="text" class="form-control" id="search" name="search" 
                                                       placeholder="Name, Email, ID..." value="{{ request('search') }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="department" class="form-label">Department</label>
                                                <select class="form-select" id="department" name="department">
                                                    <option value="">All Departments</option>
                                                    @foreach(\App\Department::all() as $dept)
                                                        <option value="{{ $dept->department_id }}" 
                                                                {{ request('department') == $dept->department_id ? 'selected' : '' }}>
                                                            {{ $dept->department_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="status" class="form-label">Status</label>
                                                <select class="form-select" id="status" name="status">
                                                    <option value="">All Status</option>
                                                    <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                                                    <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                    <option value="graduated" {{ request('status') == 'graduated' ? 'selected' : '' }}>Graduated</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="major" class="form-label">Major</label>
                                                <select class="form-select" id="major" name="major">
                                                    <option value="">All Majors</option>
                                                    @foreach(\App\Student::select('major')->distinct()->whereNotNull('major')->pluck('major') as $major)
                                                        <option value="{{ $major }}" {{ request('major') == $major ? 'selected' : '' }}>
                                                            {{ $major }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label>&nbsp;</label>
                                                <div class="d-grid gap-2">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fas fa-search"></i> Search
                                                    </button>
                                                    <a href="{{ route('students.index') }}" class="btn btn-outline-secondary">
                                                        <i class="fas fa-times"></i> Clear
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                    <th>Major</th>
                                    <th>GPA</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($students as $student)
                                    <tr>
                                        <td>{{ $student->student_id }}</td>
                                        <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                                        <td>{{ $student->user->email ?? 'N/A' }}</td>
                                        <td>{{ $student->department->department_name ?? 'N/A' }}</td>
                                        <td>{{ $student->major ?? 'N/A' }}</td>
                                        <td>
                                            @if($student->gpa)
                                                <span class="badge bg-{{ $student->gpa >= 3.5 ? 'success' : ($student->gpa >= 3.0 ? 'warning' : 'danger') }}">
                                                    {{ number_format($student->gpa, 2) }}
                                                </span>
                                            @else
                                                <span class="text-muted">N/A</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $student->status === 'active' ? 'success' : ($student->status === 'inactive' ? 'warning' : 'secondary') }}">
                                                {{ ucfirst($student->status ?? 'active') }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('students.show', $student->student_id) }}" class="btn btn-sm btn-info">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('students.edit', $student->student_id) }}" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('students.destroy', $student->student_id) }}" method="POST" style="display: inline;" 
                                                      onsubmit="return confirm('Are you sure you want to delete this student?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center text-muted">
                                            <i class="fas fa-users fa-3x mb-3"></i>
                                            <p>No students found. <a href="{{ route('students.create') }}">Add the first student</a>.</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if($students->hasPages())
                        <div class="d-flex justify-content-center">
                            {{ $students->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
