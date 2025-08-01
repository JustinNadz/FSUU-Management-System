@extends('layouts.app')

@section('title', 'Department Details')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Department Details</h3>
                    <div>
                        <a href="{{ route('departments.edit', $department->department_id) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit Department
                        </a>
                        <a href="{{ route('departments.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back to Departments
                        </a>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5>Department Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Department Name:</strong></div>
                                        <div class="col-sm-8">{{ $department->department_name }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Department Code:</strong></div>
                                        <div class="col-sm-8">
                                            <span class="badge bg-primary">{{ $department->department_code }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Department Head:</strong></div>
                                        <div class="col-sm-8">{{ $department->department_head ?? 'Not Assigned' }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Department ID:</strong></div>
                                        <div class="col-sm-8">{{ $department->department_id }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Created:</strong></div>
                                        <div class="col-sm-8">{{ $department->created_at->format('M d, Y') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5>Department Statistics</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <div class="card text-center bg-light">
                                                <div class="card-body">
                                                    <h4 class="text-primary">{{ $department->faculty->count() }}</h4>
                                                    <small class="text-muted">Faculty Members</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center bg-light">
                                                <div class="card-body">
                                                    <h4 class="text-success">{{ $department->students->count() }}</h4>
                                                    <small class="text-muted">Students</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center bg-light">
                                                <div class="card-body">
                                                    <h4 class="text-info">{{ $department->courses->count() }}</h4>
                                                    <small class="text-muted">Courses</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($department->description)
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5>Description</h5>
                                </div>
                                <div class="card-body">
                                    <p>{{ $department->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($department->faculty->count() > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5>Faculty Members</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Email</th>
                                                    <th>Joined</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($department->faculty as $faculty)
                                                    <tr>
                                                        <td>{{ $faculty->user->first_name }} {{ $faculty->user->last_name }}</td>
                                                        <td>
                                                            <span class="badge bg-info">{{ $faculty->position }}</span>
                                                        </td>
                                                        <td>{{ $faculty->user->email }}</td>
                                                        <td>{{ $faculty->created_at->format('M d, Y') }}</td>
                                                        <td>
                                                            <a href="{{ route('faculty.show', $faculty->faculty_id) }}" class="btn btn-sm btn-outline-primary">
                                                                <i class="fas fa-eye"></i> View
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($department->courses->count() > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5>Courses</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Course Code</th>
                                                    <th>Course Name</th>
                                                    <th>Credits</th>
                                                    <th>Created</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($department->courses as $course)
                                                    <tr>
                                                        <td><strong>{{ $course->course_code }}</strong></td>
                                                        <td>{{ $course->course_name }}</td>
                                                        <td>
                                                            <span class="badge bg-secondary">{{ $course->credits }} credits</span>
                                                        </td>
                                                        <td>{{ $course->created_at->format('M d, Y') }}</td>
                                                        <td>
                                                            <a href="{{ route('courses.show', $course->course_id) }}" class="btn btn-sm btn-outline-primary">
                                                                <i class="fas fa-eye"></i> View
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($department->students->count() > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Students (Latest 10)</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Student ID</th>
                                                    <th>Major</th>
                                                    <th>GPA</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($department->students->take(10) as $student)
                                                    <tr>
                                                        <td>{{ $student->user->first_name }} {{ $student->user->last_name }}</td>
                                                        <td><strong>{{ $student->student_id }}</strong></td>
                                                        <td>{{ $student->major ?? 'N/A' }}</td>
                                                        <td>
                                                            @if($student->gpa)
                                                                <span class="badge bg-{{ $student->gpa >= 3.5 ? 'success' : ($student->gpa >= 2.5 ? 'warning' : 'danger') }}">
                                                                    {{ number_format($student->gpa, 2) }}
                                                                </span>
                                                            @else
                                                                <span class="text-muted">N/A</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-{{ $student->status == 'active' ? 'success' : 'secondary' }}">
                                                                {{ ucfirst($student->status) }}
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('students.show', $student->student_id) }}" class="btn btn-sm btn-outline-primary">
                                                                <i class="fas fa-eye"></i> View
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    @if($department->students->count() > 10)
                                        <div class="text-center mt-3">
                                            <small class="text-muted">Showing 10 of {{ $department->students->count() }} students</small>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
