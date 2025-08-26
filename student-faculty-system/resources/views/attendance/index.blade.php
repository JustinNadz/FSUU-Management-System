@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Attendance Management</h4>
                    <a href="{{ route('attendance.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Record Attendance
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
                                    <th>Student</th>
                                    <th>Course</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Notes</th>
                                    <th>Recorded By</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($attendances as $attendance)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm bg-primary rounded-circle d-flex align-items-center justify-content-center me-2">
                                                    <span class="text-white fw-bold">{{ substr($attendance->enrollment->student->full_name, 0, 1) }}</span>
                                                </div>
                                                <div>
                                                    <div class="fw-bold">{{ $attendance->enrollment->student->full_name }}</div>
                                                    <small class="text-muted">ID: {{ $attendance->enrollment->student->student_id }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="fw-bold">{{ $attendance->enrollment->course->course_name }}</div>
                                                <small class="text-muted">{{ $attendance->enrollment->course->course_code }}</small>
                                            </div>
                                        </td>
                                        <td>{{ $attendance->date->format('M d, Y') }}</td>
                                        <td>
                                            @php
                                                $statusColors = [
                                                    'present' => 'success',
                                                    'absent' => 'danger',
                                                    'excused' => 'warning',
                                                    'late' => 'info'
                                                ];
                                                $color = $statusColors[$attendance->status] ?? 'secondary';
                                            @endphp
                                            <span class="badge bg-{{ $color }}">{{ ucfirst($attendance->status) }}</span>
                                        </td>
                                        <td>
                                            @if($attendance->notes)
                                                <span class="text-truncate d-inline-block" style="max-width: 150px;" title="{{ $attendance->notes }}">
                                                    {{ $attendance->notes }}
                                                </span>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($attendance->recordedBy)
                                                <div>
                                                    <div class="fw-bold">{{ $attendance->recordedBy->username }}</div>
                                                    <small class="text-muted">{{ $attendance->recorded_at->format('M d, Y H:i') }}</small>
                                                </div>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('attendance.show', $attendance) }}" class="btn btn-sm btn-outline-info">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('attendance.edit', $attendance) }}" class="btn btn-sm btn-outline-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('attendance.destroy', $attendance) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-4">
                                            <div class="text-muted">
                                                <i class="fas fa-calendar-times fa-3x mb-3"></i>
                                                <p>No attendance records found.</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        {{ $attendances->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.avatar-sm {
    width: 35px;
    height: 35px;
    font-size: 14px;
}

@media (max-width: 768px) {
    .table-responsive {
        font-size: 0.875rem;
    }
    
    .btn-group .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
    }
    
    .card-header {
        flex-direction: column;
        gap: 1rem;
    }
    
    .card-header .btn {
        width: 100%;
    }
}
</style>
@endsection 