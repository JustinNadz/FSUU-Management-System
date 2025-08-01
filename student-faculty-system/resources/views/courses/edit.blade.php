@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Edit Course</h3>
                    <a href="{{ route('courses.show', $course->course_id) }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back to Course
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

                    <form action="{{ route('courses.update', $course->course_id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Course Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="course_name" class="form-label">Course Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('course_name') is-invalid @enderror" 
                                                           id="course_name" name="course_name" value="{{ old('course_name', $course->course_name) }}" required>
                                                    @error('course_name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="course_code" class="form-label">Course Code <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('course_code') is-invalid @enderror" 
                                                           id="course_code" name="course_code" value="{{ old('course_code', $course->course_code) }}" required>
                                                    @error('course_code')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="credits" class="form-label">Credits <span class="text-danger">*</span></label>
                                                    <select class="form-select @error('credits') is-invalid @enderror" 
                                                            id="credits" name="credits" required>
                                                        <option value="">Select Credits</option>
                                                        @for($i = 1; $i <= 6; $i++)
                                                            <option value="{{ $i }}" {{ old('credits', $course->credits) == $i ? 'selected' : '' }}>
                                                                {{ $i }} {{ $i == 1 ? 'Credit' : 'Credits' }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('credits')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="department_id" class="form-label">Department <span class="text-danger">*</span></label>
                                                    <select class="form-select @error('department_id') is-invalid @enderror" 
                                                            id="department_id" name="department_id" required>
                                                        <option value="">Select Department</option>
                                                        @foreach($departments as $department)
                                                            <option value="{{ $department->department_id }}" 
                                                                    {{ old('department_id', $course->department_id) == $department->department_id ? 'selected' : '' }}>
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

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="status" class="form-label">Status</label>
                                                    <select class="form-select @error('status') is-invalid @enderror" 
                                                            id="status" name="status">
                                                        <option value="active" {{ old('status', $course->status) == 'active' ? 'selected' : '' }}>Active</option>
                                                        <option value="inactive" {{ old('status', $course->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                        <option value="archived" {{ old('status', $course->status) == 'archived' ? 'selected' : '' }}>Archived</option>
                                                    </select>
                                                    @error('status')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('courses.show', $course->course_id) }}" class="btn btn-secondary">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Update Course
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
