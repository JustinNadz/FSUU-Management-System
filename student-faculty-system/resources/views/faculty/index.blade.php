@extends('layouts.app')

@section('title', 'Faculty')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Faculty Management</h3>
                    <a href="{{ route('faculty.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add New Faculty
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
                                    <h6 class="mb-0">Search & Filter Faculty</h6>
                                </div>
                                <div class="card-body">
                                    <form method="GET" action="{{ route('faculty.index') }}">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="search" class="form-label">Search Faculty</label>
                                                <input type="text" class="form-control" id="search" name="search" 
                                                       placeholder="Name, Email, Faculty ID..." value="{{ request('search') }}">
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
                                            <div class="col-md-3">
                                            <div class="col-md-3">
                                                <label for="position" class="form-label">Position</label>
                                                <select class="form-select" id="position" name="position">
                                                    <option value="">All Positions</option>
                                                    @foreach(\App\Faculty::select('position')->distinct()->whereNotNull('position')->pluck('position') as $pos)
                                                        <option value="{{ $pos }}" {{ request('position') == $pos ? 'selected' : '' }}>
                                                            {{ $pos }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                            <div class="col-md-2">
                                                <label>&nbsp;</label>
                                                <div class="d-grid gap-2">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fas fa-search"></i> Search
                                                    </button>
                                                    <a href="{{ route('faculty.index') }}" class="btn btn-outline-secondary">
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
                                    <th>Position</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($faculty as $member)
                                    <tr>
                                        <td>{{ $member->faculty_id }}</td>
                                        <td>{{ $member->first_name }} {{ $member->last_name }}</td>
                                        <td>{{ $member->user->email ?? 'N/A' }}</td>
                                        <td>{{ $member->department->department_name ?? 'N/A' }}</td>
                                        <td>
                                            <span class="badge bg-{{ $member->position === 'Professor' ? 'success' : ($member->position === 'Associate Professor' ? 'warning' : 'info') }}">
                                                {{ $member->position ?? 'N/A' }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('faculty.show', $member->faculty_id) }}" class="btn btn-sm btn-info">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('faculty.edit', $member->faculty_id) }}" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('faculty.destroy', $member->faculty_id) }}" method="POST" style="display: inline;" 
                                                      onsubmit="return confirm('Are you sure you want to delete this faculty member?')">
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
                                        <td colspan="6" class="text-center text-muted">
                                            <i class="fas fa-chalkboard-teacher fa-3x mb-3"></i>
                                            <p>No faculty members found. <a href="{{ route('faculty.create') }}">Add the first faculty member</a>.</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if($faculty->hasPages())
                        <div class="d-flex justify-content-center">
                            {{ $faculty->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
