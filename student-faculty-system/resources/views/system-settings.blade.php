@extends('layouts.app')

@section('title', 'System Settings')

@section('page-title', 'System Settings')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">System Settings</h3>
            </div>
            <div class="card-body">
                <!-- Tab Navigation -->
                <ul class="nav nav-tabs" id="settingsTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses" type="button" role="tab">
                            <i class="fas fa-book"></i> Courses
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="departments-tab" data-bs-toggle="tab" data-bs-target="#departments" type="button" role="tab">
                            <i class="fas fa-building"></i> Departments
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="academic-years-tab" data-bs-toggle="tab" data-bs-target="#academic-years" type="button" role="tab">
                            <i class="fas fa-calendar"></i> Academic Years
                        </button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content mt-4" id="settingsTabsContent">
                    <!-- Courses Tab -->
                    <div class="tab-pane fade show active" id="courses" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5>Course Management</h5>
                            <a href="{{ route('courses.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Add Course
                            </a>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Credits</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(\App\Course::with('department')->get() as $course)
                                        <tr>
                                            <td><strong>{{ $course->course_code }}</strong></td>
                                            <td>{{ $course->course_name }}</td>
                                            <td>{{ $course->credits }}</td>
                                            <td>{{ $course->department->department_name ?? 'N/A' }}</td>
                                            <td>
                                                <span class="badge bg-{{ $course->status == 'active' ? 'success' : 'secondary' }}">
                                                    {{ ucfirst($course->status ?? 'active') }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="{{ route('courses.edit', $course->course_id) }}" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button class="btn btn-sm btn-secondary archive-btn" data-type="course" data-id="{{ $course->course_id }}">
                                                    <i class="fas fa-archive"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Departments Tab -->
                    <div class="tab-pane fade" id="departments" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5>Department Management</h5>
                            <a href="{{ route('departments.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Add Department
                            </a>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Department Name</th>
                                        <th>Head</th>
                                        <th>Faculty</th>
                                        <th>Students</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(\App\Department::withCount(['faculty', 'students'])->get() as $department)
                                        <tr>
                                            <td><strong>{{ $department->department_code }}</strong></td>
                                            <td>{{ $department->department_name }}</td>
                                            <td>{{ $department->department_head ?? 'Not Assigned' }}</td>
                                            <td>{{ $department->faculty_count }}</td>
                                            <td>{{ $department->students_count }}</td>
                                            <td>
                                                <a href="{{ route('departments.edit', $department->department_id) }}" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button class="btn btn-sm btn-secondary archive-btn" data-type="department" data-id="{{ $department->department_id }}">
                                                    <i class="fas fa-archive"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Academic Years Tab -->
                    <div class="tab-pane fade" id="academic-years" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5>Academic Year Management</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAcademicYearModal">
                                <i class="fas fa-plus"></i> Add Academic Year
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Academic Year</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="academicYearsTable">
                                    <tr>
                                        <td>2024-2025</td>
                                        <td>August 15, 2024</td>
                                        <td>May 30, 2025</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-secondary">
                                                <i class="fas fa-archive"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2025-2026</td>
                                        <td>August 20, 2025</td>
                                        <td>June 5, 2026</td>
                                        <td><span class="badge bg-info">Upcoming</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-secondary">
                                                <i class="fas fa-archive"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Academic Year Modal -->
<div class="modal fade" id="addAcademicYearModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Academic Year</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="addAcademicYearForm">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="academic_year" class="form-label">Academic Year</label>
                        <input type="text" class="form-control" id="academic_year" placeholder="2025-2026" required>
                    </div>
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="start_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">End Date</label>
                        <input type="date" class="form-control" id="end_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="is_current">
                            <label class="form-check-label" for="is_current">
                                Set as Current Academic Year
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Academic Year</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Load academic years on page load
    loadAcademicYears();

    // Archive functionality
    document.querySelectorAll('.archive-btn').forEach(button => {
        button.addEventListener('click', function() {
            const type = this.dataset.type;
            const id = this.dataset.id;
            
            if (confirm(`Are you sure you want to archive this ${type}?`)) {
                console.log(`Archiving ${type} with ID: ${id}`);
                this.closest('tr').style.opacity = '0.5';
                this.innerHTML = '<i class="fas fa-check"></i> Archived';
                this.disabled = true;
            }
        });
    });

    // Handle academic year form submission
    document.getElementById('addAcademicYearForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = {
            year_name: document.getElementById('academic_year').value,
            start_date: document.getElementById('start_date').value,
            end_date: document.getElementById('end_date').value,
            status: document.getElementById('status').value,
            is_current: document.getElementById('is_current').checked,
            _token: '{{ csrf_token() }}'
        };

        fetch('/api/academic-years', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showAlert('Academic year added successfully!', 'success');
                loadAcademicYears();
                
                const modal = bootstrap.Modal.getInstance(document.getElementById('addAcademicYearModal'));
                modal.hide();
                this.reset();
            } else {
                showAlert('Error: ' + (data.message || 'Failed to add academic year'), 'danger');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showAlert('An error occurred while adding the academic year', 'danger');
        });
    });
});

function loadAcademicYears() {
    fetch('/api/academic-years')
        .then(response => response.json())
        .then(data => {
            const tableBody = document.getElementById('academicYearsTable');
            tableBody.innerHTML = '';

            data.forEach(year => {
                const row = document.createElement('tr');
                const statusClass = year.status === 'active' ? 'success' : 
                                   year.status === 'inactive' ? 'secondary' : 'warning';
                
                row.innerHTML = `
                    <td>${year.year_name}</td>
                    <td>${new Date(year.start_date).toLocaleDateString('en-US', { 
                        year: 'numeric', month: 'long', day: 'numeric' 
                    })}</td>
                    <td>${new Date(year.end_date).toLocaleDateString('en-US', { 
                        year: 'numeric', month: 'long', day: 'numeric' 
                    })}</td>
                    <td>
                        <span class="badge bg-${statusClass}">${year.status.charAt(0).toUpperCase() + year.status.slice(1)}</span>
                        ${year.is_current ? '<span class="badge bg-primary ms-1">Current</span>' : ''}
                    </td>
                    <td>
                        <button class="btn btn-sm btn-warning edit-year-btn" data-id="${year.year_id}" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        ${!year.is_current ? `
                            <button class="btn btn-sm btn-primary set-current-btn" data-id="${year.year_id}" title="Set as Current">
                                <i class="fas fa-star"></i>
                            </button>
                        ` : ''}
                        ${!year.is_current ? `
                            <button class="btn btn-sm btn-danger delete-year-btn" data-id="${year.year_id}" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        ` : ''}
                    </td>
                `;
                tableBody.appendChild(row);
            });

            addYearActionListeners();
        })
        .catch(error => {
            console.error('Error loading academic years:', error);
            showAlert('Error loading academic years', 'danger');
        });
}

function addYearActionListeners() {
    // Set current academic year
    document.querySelectorAll('.set-current-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const yearId = this.dataset.id;
            
            fetch(`/api/academic-years/${yearId}/set-current`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert('Academic year set as current successfully!', 'success');
                    loadAcademicYears();
                } else {
                    showAlert('Error: ' + data.message, 'danger');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showAlert('An error occurred', 'danger');
            });
        });
    });

    // Delete academic year
    document.querySelectorAll('.delete-year-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const yearId = this.dataset.id;
            
            if (confirm('Are you sure you want to delete this academic year?')) {
                fetch(`/api/academic-years/${yearId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showAlert('Academic year deleted successfully!', 'success');
                        loadAcademicYears();
                    } else {
                        showAlert('Error: ' + data.message, 'danger');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showAlert('An error occurred', 'danger');
                });
            }
        });
    });
}

function showAlert(message, type) {
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
    alertDiv.style.cssText = 'top: 20px; right: 20px; z-index: 9999; max-width: 400px;';
    alertDiv.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.body.appendChild(alertDiv);
    
    setTimeout(() => {
        if (alertDiv.parentNode) {
            alertDiv.remove();
        }
    }, 5000);
}
</script>
@endsection
