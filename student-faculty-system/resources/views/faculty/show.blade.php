@extends('layouts.app')

@section('title', 'Faculty Details')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Faculty Details</h3>
                    <div>
                        <a href="{{ route('faculty.edit', $faculty->faculty_id) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit Faculty
                        </a>
                        <a href="{{ route('faculty.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back to Faculty
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
                                        <div class="col-sm-4"><strong>Full Name:</strong></div>
                                        <div class="col-sm-8">{{ $faculty->user->first_name }} {{ $faculty->user->last_name }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Username:</strong></div>
                                        <div class="col-sm-8">{{ $faculty->user->username }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Email:</strong></div>
                                        <div class="col-sm-8">{{ $faculty->user->email }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Role:</strong></div>
                                        <div class="col-sm-8">
                                            <span class="badge bg-info">{{ ucfirst($faculty->user->role) }}</span>
                                        </div>
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
                                        <div class="col-sm-8">{{ $faculty->department->department_name ?? 'N/A' }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Position:</strong></div>
                                        <div class="col-sm-8">
                                            <span class="badge bg-primary">{{ $faculty->position }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Faculty ID:</strong></div>
                                        <div class="col-sm-8">{{ $faculty->faculty_id }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><strong>Member Since:</strong></div>
                                        <div class="col-sm-8">{{ $faculty->created_at->format('M d, Y') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($faculty->facultyCourses->count() > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Assigned Courses</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Course Code</th>
                                                    <th>Course Name</th>
                                                    <th>Credits</th>
                                                    <th>Department</th>
                                                    <th>Assigned Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($faculty->facultyCourses as $facultyCourse)
                                                    <tr>
                                                        <td><strong>{{ $facultyCourse->course->course_code }}</strong></td>
                                                        <td>{{ $facultyCourse->course->course_name }}</td>
                                                        <td>
                                                            <span class="badge bg-secondary">{{ $facultyCourse->course->credits }} credits</span>
                                                        </td>
                                                        <td>{{ $facultyCourse->course->department->department_name ?? 'N/A' }}</td>
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
                    @else
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Assigned Courses</h5>
                                </div>
                                <div class="card-body text-center">
                                    <div class="py-4">
                                        <i class="fas fa-book-open fa-3x text-muted mb-3"></i>
                                        <h5 class="text-muted">No Courses Assigned</h5>
                                        <p class="text-muted">This faculty member has not been assigned to any courses yet.</p>
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
