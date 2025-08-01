@extends('layouts.app')

@section('title', 'Add New Course')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Add New Course</h3>
                    <a href="{{ route('courses.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back to Courses
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

                    <form action="{{ route('courses.store') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5>Course Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="course_code" class="form-label">Course Code <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('course_code') is-invalid @enderror" 
                                                   id="course_code" name="course_code" value="{{ old('course_code') }}" 
                                                   placeholder="e.g., CS101, MATH201" required>
                                            @error('course_code')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="course_name" class="form-label">Course Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('course_name') is-invalid @enderror" 
                                                   id="course_name" name="course_name" value="{{ old('course_name') }}" 
                                                   placeholder="e.g., Introduction to Programming" required>
                                            @error('course_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="department_id" class="form-label">Department <span class="text-danger">*</span></label>
                                            <select class="form-select @error('department_id') is-invalid @enderror" 
                                                    id="department_id" name="department_id" required>
                                                <option value="">Select Department</option>
                                                @foreach($departments as $department)
                                                    <option value="{{ $department->department_id }}" 
                                                            {{ old('department_id') == $department->department_id ? 'selected' : '' }}>
                                                        {{ $department->department_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('department_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5>Course Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="credits" class="form-label">Credits</label>
                                                    <input type="number" class="form-control @error('credits') is-invalid @enderror" 
                                                           id="credits" name="credits" value="{{ old('credits') }}" 
                                                           min="1" max="6" placeholder="3">
                                                    @error('credits')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="semester" class="form-label">Semester</label>
                                                    <select class="form-select @error('semester') is-invalid @enderror" 
                                                            id="semester" name="semester">
                                                        <option value="">Select Semester</option>
                                                        <option value="Fall" {{ old('semester') == 'Fall' ? 'selected' : '' }}>Fall</option>
                                                        <option value="Spring" {{ old('semester') == 'Spring' ? 'selected' : '' }}>Spring</option>
                                                        <option value="Summer" {{ old('semester') == 'Summer' ? 'selected' : '' }}>Summer</option>
                                                        <option value="Winter" {{ old('semester') == 'Winter' ? 'selected' : '' }}>Winter</option>
                                                    </select>
                                                    @error('semester')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="year" class="form-label">Year</label>
                                                    <input type="number" class="form-control @error('year') is-invalid @enderror" 
                                                           id="year" name="year" value="{{ old('year', date('Y')) }}" 
                                                           min="2020" max="2030">
                                                    @error('year')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="status" class="form-label">Status</label>
                                                    <select class="form-select @error('status') is-invalid @enderror" 
                                                            id="status" name="status">
                                                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                        <option value="archived" {{ old('status') == 'archived' ? 'selected' : '' }}>Archived</option>
                                                    </select>
                                                    @error('status')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                                      id="description" name="description" rows="4" 
                                                      placeholder="Course description and objectives">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5>Additional Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="prerequisites" class="form-label">Prerequisites</label>
                                                    <input type="text" class="form-control @error('prerequisites') is-invalid @enderror" 
                                                           id="prerequisites" name="prerequisites" value="{{ old('prerequisites') }}"
                                                           placeholder="e.g., CS100, MATH150">
                                                    @error('prerequisites')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="schedule" class="form-label">Schedule</label>
                                                    <input type="text" class="form-control @error('schedule') is-invalid @enderror" 
                                                           id="schedule" name="schedule" value="{{ old('schedule') }}"
                                                           placeholder="e.g., MWF 10:00-11:00">
                                                    @error('schedule')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="location" class="form-label">Location</label>
                                                    <input type="text" class="form-control @error('location') is-invalid @enderror" 
                                                           id="location" name="location" value="{{ old('location') }}"
                                                           placeholder="e.g., Room 101, Building A">
                                                    @error('location')
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
                                    <a href="{{ route('courses.index') }}" class="btn btn-secondary">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Create Course
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
