@extends('layouts.app')

@section('title', 'Departments')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Department Management</h3>
                    <a href="{{ route('departments.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add New Department
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
                                    <th>Department Name</th>
                                    <th>Code</th>
                                    <th>Department Head</th>
                                    <th>Students</th>
                                    <th>Faculty</th>
                                    <th>Courses</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($departments as $department)
                                <tr>
                                    <td>{{ $department->department_id }}</td>
                                    <td>
                                        <strong>{{ $department->department_name }}</strong>
                                    </td>
                                    <td>
                                        <code>{{ $department->department_code }}</code>
                                    </td>
                                    <td>{{ $department->department_head ?? 'Not Assigned' }}</td>
                                    <td>
                                        <span class="badge bg-primary">{{ $department->students_count ?? 0 }}</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">{{ $department->faculty_count ?? 0 }}</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-info">{{ $department->courses_count ?? 0 }}</span>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('departments.show', $department->department_id) }}" 
                                               class="btn btn-sm btn-info" title="View">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('departments.edit', $department->department_id) }}" 
                                               class="btn btn-sm btn-warning" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('departments.destroy', $department->department_id) }}" 
                                                  method="POST" style="display: inline-block;"
                                                  onsubmit="return confirm('Are you sure you want to delete this department?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center">
                                        <div class="py-4">
                                            <i class="fas fa-building fa-3x text-muted mb-3"></i>
                                            <h5 class="text-muted">No departments found</h5>
                                            <p class="text-muted">Get started by creating your first department.</p>
                                            <a href="{{ route('departments.create') }}" class="btn btn-primary">
                                                <i class="fas fa-plus"></i> Add Department
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if($departments->hasPages())
                        <div class="d-flex justify-content-center">
                            {{ $departments->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
