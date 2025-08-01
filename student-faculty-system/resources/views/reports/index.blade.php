@extends('layouts.app')

@section('title', 'Reports & Analytics')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Reports & Analytics Dashboard</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Summary Statistics -->
    <div class="row mt-4">
        <div class="col-lg-3 col-md-6">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h4 class="mb-0">{{ $totalStudents }}</h4>
                            <p class="mb-0">Total Students</p>
                        </div>
                        <div class="flex-shrink-0">
                            <i class="fas fa-user-graduate fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h4 class="mb-0">{{ $totalFaculty }}</h4>
                            <p class="mb-0">Total Faculty</p>
                        </div>
                        <div class="flex-shrink-0">
                            <i class="fas fa-chalkboard-teacher fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h4 class="mb-0">{{ $totalCourses }}</h4>
                            <p class="mb-0">Total Courses</p>
                        </div>
                        <div class="flex-shrink-0">
                            <i class="fas fa-book fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h4 class="mb-0">{{ $totalDepartments }}</h4>
                            <p class="mb-0">Total Departments</p>
                        </div>
                        <div class="flex-shrink-0">
                            <i class="fas fa-building fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Department Statistics -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Students by Department</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Department</th>
                                    <th>Student Count</th>
                                    <th>Percentage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($studentsByDepartment as $dept)
                                <tr>
                                    <td>{{ $dept->department_name }}</td>
                                    <td>{{ $dept->students_count }}</td>
                                    <td>
                                        @if($totalStudents > 0)
                                            {{ number_format(($dept->students_count / $totalStudents) * 100, 1) }}%
                                        @else
                                            0%
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Faculty by Department</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Department</th>
                                    <th>Faculty Count</th>
                                    <th>Percentage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($facultyByDepartment as $dept)
                                <tr>
                                    <td>{{ $dept->department_name }}</td>
                                    <td>{{ $dept->faculty_count }}</td>
                                    <td>
                                        @if($totalFaculty > 0)
                                            {{ number_format(($dept->faculty_count / $totalFaculty) * 100, 1) }}%
                                        @else
                                            0%
                                        @endif
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

    <!-- GPA Statistics -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Student Performance Statistics</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="text-center">
                                <h4 class="text-primary">{{ number_format($gpaStats->average_gpa ?? 0, 2) }}</h4>
                                <p class="mb-0">Average GPA</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <h4 class="text-success">{{ $gpaStats->honors_students ?? 0 }}</h4>
                                <p class="mb-0">Honor Students (GPA ≥ 3.5)</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <small class="text-muted">Minimum GPA: {{ number_format($gpaStats->min_gpa ?? 0, 2) }}</small>
                        </div>
                        <div class="col-6">
                            <small class="text-muted">Maximum GPA: {{ number_format($gpaStats->max_gpa ?? 0, 2) }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Student Status Distribution</h5>
                </div>
                <div class="card-body">
                    @foreach($studentStatusStats as $status)
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="text-capitalize">{{ $status->status }}</span>
                        <span class="badge bg-primary">{{ $status->count }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Course Enrollment -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Course Enrollment Statistics</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Department</th>
                                    <th>Enrollment</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courseEnrollment->take(10) as $course)
                                <tr>
                                    <td><strong>{{ $course->course_code }}</strong></td>
                                    <td>{{ $course->course_name }}</td>
                                    <td>{{ $course->department->department_name ?? 'N/A' }}</td>
                                    <td>
                                        <span class="badge bg-info">{{ $course->enrollment_count }} students</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $course->status == 'active' ? 'success' : 'secondary' }}">
                                            {{ ucfirst($course->status) }}
                                        </span>
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

    <!-- Faculty Position Distribution -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Faculty Position Distribution</h5>
                </div>
                <div class="card-body">
                    @foreach($facultyPositionStats as $position)
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span>{{ $position->position }}</span>
                        <span class="badge bg-success">{{ $position->count }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Recent Activities</h5>
                </div>
                <div class="card-body">
                    <h6 class="text-muted">Recent Students</h6>
                    @foreach($recentStudents as $student)
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <small>{{ $student->user->first_name }} {{ $student->user->last_name }}</small>
                        <small class="text-muted">{{ $student->created_at->format('M d') }}</small>
                    </div>
                    @endforeach
                    
                    <hr>
                    <h6 class="text-muted">Recent Faculty</h6>
                    @foreach($recentFaculty as $faculty)
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <small>{{ $faculty->user->first_name }} {{ $faculty->user->last_name }}</small>
                        <small class="text-muted">{{ $faculty->created_at->format('M d') }}</small>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
