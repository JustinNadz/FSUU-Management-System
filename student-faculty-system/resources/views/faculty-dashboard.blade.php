@extends('layouts.app')

@section('title', 'Faculty Dashboard')

@section('page-title', 'Faculty Dashboard')

@section('content')
<div class="row">
    <!-- Welcome Card -->
    <div class="col-12 mb-4">
        <div class="card border-left-primary shadow">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col">
                        <h4 class="text-primary mb-1">Welcome, {{ $faculty->user->first_name }} {{ $faculty->user->last_name }}!</h4>
                        <p class="text-muted mb-0">{{ $faculty->position }} - {{ $faculty->department->department_name ?? 'No Department' }}</p>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-chalkboard-teacher fa-3x text-gray-300"></i>
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
                            Assigned Courses</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $assignedCourses }}</div>
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
                            Total Students</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalStudents }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
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
                            Department Faculty</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $departmentFaculty }}</div>
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
                            Department Courses</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $departmentCourses }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
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
                <h6 class="m-0 font-weight-bold text-primary">My Assigned Courses</h6>
            </div>
            <div class="card-body">
                @if($faculty->facultyCourses->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Credits</th>
                                    <th>Students</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($faculty->facultyCourses as $facultyCourse)
                                    <tr>
                                        <td><strong>{{ $facultyCourse->course->course_code }}</strong></td>
                                        <td>{{ $facultyCourse->course->course_name }}</td>
                                        <td>{{ $facultyCourse->course->credits }}</td>
                                        <td>{{ $facultyCourse->course->studentCourses->count() }}</td>
                                        <td>
                                            <a href="{{ route('courses.show', $facultyCourse->course->course_id) }}" class="btn btn-primary btn-sm">
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
                        <h5 class="text-muted">No Courses Assigned</h5>
                        <p class="text-muted">You haven't been assigned to any courses yet.</p>
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
                    <a href="{{ route('faculty.show', $faculty->faculty_id) }}" class="btn btn-primary">
                        <i class="fas fa-user"></i> View My Profile
                    </a>
                    <a href="{{ route('courses.index') }}" class="btn btn-success">
                        <i class="fas fa-book"></i> View All Courses
                    </a>
                    <a href="{{ route('students.index') }}" class="btn btn-info">
                        <i class="fas fa-user-graduate"></i> View Students
                    </a>
                    <a href="{{ route('departments.show', $faculty->department_id) }}" class="btn btn-warning">
                        <i class="fas fa-building"></i> My Department
                    </a>
                </div>
            </div>
        </div>

        <!-- Faculty Information -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">My Information</h6>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-6"><strong>Faculty ID:</strong></div>
                    <div class="col-sm-6">{{ $faculty->faculty_id }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6"><strong>Position:</strong></div>
                    <div class="col-sm-6">{{ $faculty->position }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6"><strong>Department:</strong></div>
                    <div class="col-sm-6">{{ $faculty->department->department_name ?? 'N/A' }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6"><strong>Email:</strong></div>
                    <div class="col-sm-6">{{ $faculty->user->email }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
