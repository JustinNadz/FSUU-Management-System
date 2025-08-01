@extends('layouts.app')

@section('title', 'Edit Department')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Edit Department</h3>
                    <a href="{{ route('departments.show', $department->department_id) }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back to Department
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

                    <form action="{{ route('departments.update', $department->department_id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Department Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="department_name" class="form-label">Department Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('department_name') is-invalid @enderror" 
                                                           id="department_name" name="department_name" value="{{ old('department_name', $department->department_name) }}" required>
                                                    @error('department_name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="department_code" class="form-label">Department Code <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('department_code') is-invalid @enderror" 
                                                           id="department_code" name="department_code" value="{{ old('department_code', $department->department_code) }}" required>
                                                    @error('department_code')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="department_head" class="form-label">Department Head</label>
                                                    <input type="text" class="form-control @error('department_head') is-invalid @enderror" 
                                                           id="department_head" name="department_head" value="{{ old('department_head', $department->department_head) }}">
                                                    @error('department_head')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="description" class="form-label">Description</label>
                                                    <textarea class="form-control @error('description') is-invalid @enderror" 
                                                              id="description" name="description" rows="4">{{ old('description', $department->description) }}</textarea>
                                                    @error('description')
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
                                    <a href="{{ route('departments.show', $department->department_id) }}" class="btn btn-secondary">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Update Department
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
