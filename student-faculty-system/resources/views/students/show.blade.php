@extends('layouts.app')

@section('title', 'Student Details')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Student Details</h3>
                    <div>
                        <a href="{{ route('students.edit', $student->student_id) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit Student
                        </a>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back to Students
                        </a>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5>Personal Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Student ID:</strong></div>
                                        <div class="col-sm-8">{{ $student->student_id }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Full Name:</strong></div>
                                        <div class="col-sm-8">{{ $student->user->first_name }} {{ $student->user->last_name }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Email:</strong></div>
                                        <div class="col-sm-8">{{ $student->user->email }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Username:</strong></div>
                                        <div class="col-sm-8">{{ $student->user->username }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Age:</strong></div>
                                        <div class="col-sm-8">{{ $student->age ?? 'Not specified' }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Phone:</strong></div>
                                        <div class="col-sm-8">{{ $student->phone_number ?? 'Not specified' }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Address:</strong></div>
                                        <div class="col-sm-8">{{ $student->address ?? 'Not specified' }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5>Academic Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Department:</strong></div>
                                        <div class="col-sm-8">{{ $student->department->department_name ?? 'Not assigned' }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Major:</strong></div>
                                        <div class="col-sm-8">{{ $student->major ?? 'Not specified' }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>GPA:</strong></div>
                                        <div class="col-sm-8">
                                            @if($student->gpa)
                                                <span class="badge bg-{{ $student->gpa >= 3.5 ? 'success' : ($student->gpa >= 3.0 ? 'warning' : 'danger') }}">
                                                    {{ number_format($student->gpa, 2) }}
                                                </span>
                                            @else
                                                Not specified
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Status:</strong></div>
                                        <div class="col-sm-8">
                                            <span class="badge bg-{{ $student->status == 'active' ? 'success' : ($student->status == 'graduated' ? 'primary' : 'secondary') }}">
                                                {{ ucfirst($student->status) }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Enrolled Since:</strong></div>
                                        <div class="col-sm-8">{{ $student->created_at->format('F d, Y') }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Last Updated:</strong></div>
                                        <div class="col-sm-8">{{ $student->updated_at->format('F d, Y') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($student->studentCourses && $student->studentCourses->count() > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Enrolled Courses</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Course Code</th>
                                                    <th>Course Name</th>
                                                    <th>Department</th>
                                                    <th>Enrolled Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($student->studentCourses as $enrollment)
                                                    @if($enrollment->course)
                                                    <tr>
                                                        <td><strong>{{ $enrollment->course->course_code }}</strong></td>
                                                        <td>{{ $enrollment->course->course_name }}</td>
                                                        <td>{{ $enrollment->course->department->department_name ?? 'N/A' }}</td>
                                                        <td>{{ $enrollment->created_at->format('M d, Y') }}</td>
                                                    </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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
