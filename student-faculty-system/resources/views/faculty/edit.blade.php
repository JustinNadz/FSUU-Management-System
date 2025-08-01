@extends('layouts.app')

@section('title', 'Edit Faculty')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Edit Faculty Member</h3>
                    <a href="{{ route('faculty.show', $faculty->faculty_id) }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back to Faculty
                    </a>
                </div>
                
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('faculty.update', $faculty->faculty_id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5>User Account Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('username') is-invalid @enderror" 
                                                   id="username" name="username" value="{{ old('username', $faculty->user->username) }}" required>
                                            @error('username')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                                   id="email" name="email" value="{{ old('email', $faculty->user->email) }}" required>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                                   id="password" name="password">
                                            <small class="form-text text-muted">Leave blank to keep current password</small>
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5>Personal Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" 
                                                           id="first_name" name="first_name" value="{{ old('first_name', $faculty->user->first_name) }}" required>
                                                    @error('first_name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" 
                                                           id="last_name" name="last_name" value="{{ old('last_name', $faculty->user->last_name) }}" required>
                                                    @error('last_name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5>Academic Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="department_id" class="form-label">Department <span class="text-danger">*</span></label>
                                                    <select class="form-select @error('department_id') is-invalid @enderror" 
                                                            id="department_id" name="department_id" required>
                                                        <option value="">Select Department</option>
                                                        @foreach($departments as $department)
                                                            <option value="{{ $department->department_id }}" 
                                                                    {{ old('department_id', $faculty->department_id) == $department->department_id ? 'selected' : '' }}>
                                                                {{ $department->department_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('department_id')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="position" class="form-label">Position <span class="text-danger">*</span></label>
                                                    <select class="form-select @error('position') is-invalid @enderror" 
                                                            id="position" name="position" required>
                                                        <option value="">Select Position</option>
                                                        <option value="Professor" {{ old('position', $faculty->position) == 'Professor' ? 'selected' : '' }}>Professor</option>
                                                        <option value="Associate Professor" {{ old('position', $faculty->position) == 'Associate Professor' ? 'selected' : '' }}>Associate Professor</option>
                                                        <option value="Assistant Professor" {{ old('position', $faculty->position) == 'Assistant Professor' ? 'selected' : '' }}>Assistant Professor</option>
                                                        <option value="Lecturer" {{ old('position', $faculty->position) == 'Lecturer' ? 'selected' : '' }}>Lecturer</option>
                                                        <option value="Instructor" {{ old('position', $faculty->position) == 'Instructor' ? 'selected' : '' }}>Instructor</option>
                                                        <option value="Teaching Assistant" {{ old('position', $faculty->position) == 'Teaching Assistant' ? 'selected' : '' }}>Teaching Assistant</option>
                                                    </select>
                                                    @error('position')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('faculty.show', $faculty->faculty_id) }}" class="btn btn-secondary">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Update Faculty
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
