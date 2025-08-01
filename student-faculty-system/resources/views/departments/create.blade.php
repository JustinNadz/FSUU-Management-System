@extends('layouts.app')

@section('title', 'Add New Department')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Add New Department</h3>
                    <a href="{{ route('departments.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back to Departments
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

                    <form action="{{ route('departments.store') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Department Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="department_name" class="form-label">Department Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('department_name') is-invalid @enderror" 
                                                   id="department_name" name="department_name" value="{{ old('department_name') }}" 
                                                   placeholder="e.g., Computer Science, Mathematics" required>
                                            @error('department_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="department_code" class="form-label">Department Code <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('department_code') is-invalid @enderror" 
                                                   id="department_code" name="department_code" value="{{ old('department_code') }}" 
                                                   placeholder="e.g., CS, MATH, ENG" required maxlength="10">
                                            @error('department_code')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="department_head" class="form-label">Department Head</label>
                                            <input type="text" class="form-control @error('department_head') is-invalid @enderror" 
                                                   id="department_head" name="department_head" value="{{ old('department_head') }}"
                                                   placeholder="Name of the department head">
                                            @error('department_head')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                                      id="description" name="description" rows="4"
                                                      placeholder="Brief description of the department">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('departments.index') }}" class="btn btn-secondary">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Create Department
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
