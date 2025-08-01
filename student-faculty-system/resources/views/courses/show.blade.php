@extends('layouts.app')

@section('title', 'Course Details')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Course Details</h3>
                    <div>
                        <a href="{{ route('courses.edit', $course->course_id) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit Course
                        </a>
                        <a href="{{ route('courses.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back to Courses
                        </a>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5>Course Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Course Name:</strong></div>
                                        <div class="col-sm-8">{{ $course->course_name }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Course Code:</strong></div>
                                        <div class="col-sm-8">
                                            <span class="badge bg-primary">{{ $course->course_code }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Credits:</strong></div>
                                        <div class="col-sm-8">
                                            <span class="badge bg-secondary">{{ $course->credits }} credits</span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Department:</strong></div>
                                        <div class="col-sm-8">{{ $course->department->department_name ?? 'N/A' }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Course ID:</strong></div>
                                        <div class="col-sm-8">{{ $course->course_id }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Created:</strong></div>
                                        <div class="col-sm-8">{{ $course->created_at->format('M d, Y') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5>Course Statistics</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <div class="card text-center bg-light">
                                                <div class="card-body">
                                                    <h4 class="text-primary">{{ $course->facultyCourses->count() }}</h4>
                                                    <small class="text-muted">Faculty Assigned</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card text-center bg-light">
                                                <div class="card-body">
                                                    <h4 class="text-success">{{ $course->studentCourses->count() }}</h4>
                                                    <small class="text-muted">Students Enrolled</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($course->facultyCourses->count() > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5>Assigned Faculty</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Faculty Name</th>
                                                    <th>Position</th>
                                                    <th>Department</th>
                                                    <th>Assigned Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($course->facultyCourses as $facultyCourse)
                                                    <tr>
                                                        <td>{{ $facultyCourse->faculty->user->first_name }} {{ $facultyCourse->faculty->user->last_name }}</td>
                                                        <td>
                                                            <span class="badge bg-info">{{ $facultyCourse->faculty->position }}</span>
                                                        </td>
                                                        <td>{{ $facultyCourse->faculty->department->department_name ?? 'N/A' }}</td>
                                                        <td>{{ $facultyCourse->created_at->format('M d, Y') }}</td>
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

                    @if($course->studentCourses->count() > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Enrolled Students</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Student Name</th>
                                                    <th>Student ID</th>
                                                    <th>Department</th>
                                                    <th>GPA</th>
                                                    <th>Enrollment Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($course->studentCourses as $studentCourse)
                                                    <tr>
                                                        <td>{{ $studentCourse->student->user->first_name }} {{ $studentCourse->student->user->last_name }}</td>
                                                        <td><strong>{{ $studentCourse->student->student_id }}</strong></td>
                                                        <td>{{ $studentCourse->student->department->department_name ?? 'N/A' }}</td>
                                                        <td>
                                                            @if($studentCourse->student->gpa)
                                                                <span class="badge bg-{{ $studentCourse->student->gpa >= 3.5 ? 'success' : ($studentCourse->student->gpa >= 2.5 ? 'warning' : 'danger') }}">
                                                                    {{ number_format($studentCourse->student->gpa, 2) }}
                                                                </span>
                                                            @else
                                                                <span class="text-muted">N/A</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $studentCourse->created_at->format('M d, Y') }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Enrolled Students</h5>
                                </div>
                                <div class="card-body text-center">
                                    <div class="py-4">
                                        <i class="fas fa-users fa-3x text-muted mb-3"></i>
                                        <h5 class="text-muted">No Students Enrolled</h5>
                                        <p class="text-muted">No students have enrolled in this course yet.</p>
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
