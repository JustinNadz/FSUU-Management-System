@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('page-title', 'Student Dashboard')

@section('content')
<div class="row">
    <!-- Welcome Card -->
    <div class="col-12 mb-4">
        <div class="card border-left-success shadow">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col">
                        <h4 class="text-success mb-1">Welcome, {{ $student->user->first_name }} {{ $student->user->last_name }}!</h4>
                        <p class="text-muted mb-0">{{ $student->major ?? 'No Major' }} - {{ $student->department->department_name ?? 'No Department' }}</p>
                        @if($student->gpa)
                            <p class="text-muted mb-0">Current GPA: 
                                <span class="badge bg-{{ $student->gpa >= 3.5 ? 'success' : ($student->gpa >= 2.5 ? 'warning' : 'danger') }}">
                                    {{ number_format($student->gpa, 2) }}
                                </span>
                            </p>
                        @endif
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-graduate fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Statistics Cards -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Enrolled Courses</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $enrolledCourses }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Credits</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalCredits }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Department Students</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $departmentStudents }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Available Courses</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $availableCourses }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- My Courses -->
    <div class="col-lg-8 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">My Enrolled Courses</h6>
            </div>
            <div class="card-body">
                @if($student->studentCourses->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Credits</th>
                                    <th>Department</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($student->studentCourses as $studentCourse)
                                    <tr>
                                        <td><strong>{{ $studentCourse->course->course_code }}</strong></td>
                                        <td>{{ $studentCourse->course->course_name }}</td>
                                        <td>{{ $studentCourse->course->credits }}</td>
                                        <td>{{ $studentCourse->course->department->department_name ?? 'N/A' }}</td>
                                        <td>
                                            <a href="{{ route('courses.show', $studentCourse->course->course_id) }}" class="btn btn-primary btn-sm">
                                                <i class="fas fa-eye"></i> View
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-4">
                        <i class="fas fa-book fa-3x text-muted mb-3"></i>
                        <h5 class="text-muted">No Courses Enrolled</h5>
                        <p class="text-muted">You haven't enrolled in any courses yet.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="col-lg-4 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Quick Actions</h6>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('students.show', $student->student_id) }}" class="btn btn-primary">
                        <i class="fas fa-user"></i> View My Profile
                    </a>
                    <a href="{{ route('courses.index') }}" class="btn btn-success">
                        <i class="fas fa-book"></i> Browse Courses
                    </a>
                    <a href="{{ route('faculty.index') }}" class="btn btn-info">
                        <i class="fas fa-chalkboard-teacher"></i> View Faculty
                    </a>
                    <a href="{{ route('departments.show', $student->department_id) }}" class="btn btn-warning">
                        <i class="fas fa-building"></i> My Department
                    </a>
                </div>
            </div>
        </div>

        <!-- Student Information -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">My Information</h6>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-6"><strong>Student ID:</strong></div>
                    <div class="col-sm-6">{{ $student->student_id }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6"><strong>Major:</strong></div>
                    <div class="col-sm-6">{{ $student->major ?? 'N/A' }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6"><strong>Department:</strong></div>
                    <div class="col-sm-6">{{ $student->department->department_name ?? 'N/A' }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6"><strong>Status:</strong></div>
                    <div class="col-sm-6">
                        <span class="badge bg-{{ $student->status == 'active' ? 'success' : 'secondary' }}">
                            {{ ucfirst($student->status) }}
                        </span>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6"><strong>GPA:</strong></div>
                    <div class="col-sm-6">
                        @if($student->gpa)
                            <span class="badge bg-{{ $student->gpa >= 3.5 ? 'success' : ($student->gpa >= 2.5 ? 'warning' : 'danger') }}">
                                {{ number_format($student->gpa, 2) }}
                            </span>
                        @else
                            <span class="text-muted">N/A</span>
                        @endif
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6"><strong>Email:</strong></div>
                    <div class="col-sm-6">{{ $student->user->email }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
