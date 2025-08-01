@extends('layouts.app')

@section('title', 'Courses')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Course Management</h3>
                    <a href="{{ route('courses.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add New Course
                    </a>
                </div>
                
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Credits</th>
                                    <th>Department</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($courses as $course)
                                    <tr>
                                        <td>{{ $course->course_id }}</td>
                                        <td>
                                            <span class="badge bg-primary">{{ $course->course_code }}</span>
                                        </td>
                                        <td>{{ $course->course_name }}</td>
                                        <td>
                                            <span class="badge bg-info">{{ $course->credits }} credits</span>
                                        </td>
                                        <td>{{ $course->department->department_name ?? 'N/A' }}</td>
                                        <td>
                                            <span class="badge bg-{{ $course->status === 'active' ? 'success' : 'secondary' }}">
                                                {{ ucfirst($course->status ?? 'active') }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('courses.show', $course->course_id) }}" class="btn btn-sm btn-info">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('courses.edit', $course->course_id) }}" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('courses.destroy', $course->course_id) }}" method="POST" style="display: inline;" 
                                                      onsubmit="return confirm('Are you sure you want to delete this course?')">
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
                                        <td colspan="7" class="text-center text-muted">
                                            <i class="fas fa-book fa-3x mb-3"></i>
                                            <p>No courses found. <a href="{{ route('courses.create') }}">Add the first course</a>.</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if($courses->hasPages())
                        <div class="d-flex justify-content-center">
                            {{ $courses->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
