@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Academic Calendar</h4>
                    <a href="{{ route('academic-calendar.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Event
                    </a>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="row">
                        @forelse($events as $event)
                            <div class="col-12 col-md-6 col-lg-4 mb-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-header bg-primary text-white">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6 class="mb-0">{{ $event->title }}</h6>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{ route('academic-calendar.show', $event) }}">
                                                        <i class="fas fa-eye"></i> View
                                                    </a></li>
                                                    <li><a class="dropdown-item" href="{{ route('academic-calendar.edit', $event) }}">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li>
                                                        <form action="{{ route('academic-calendar.destroy', $event) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Are you sure?')">
                                                                <i class="fas fa-trash"></i> Delete
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <strong>Student:</strong>
                                            <div class="mt-1">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm bg-secondary rounded-circle d-flex align-items-center justify-content-center me-2">
                                                        <span class="text-white fw-bold">{{ substr($event->student->full_name, 0, 1) }}</span>
                                                    </div>
                                                    <span>{{ $event->student->full_name }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        @if($event->course)
                                            <div class="mb-3">
                                                <strong>Course:</strong>
                                                <div class="mt-1">
                                                    <span class="badge bg-info">{{ $event->course->course_name }}</span>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="mb-3">
                                            <strong>Date Range:</strong>
                                            <div class="mt-1">
                                                <i class="fas fa-calendar text-primary"></i>
                                                <span class="ms-1">{{ $event->start_date->format('M d, Y') }}</span>
                                                @if($event->end_date)
                                                    <span class="text-muted">to {{ $event->end_date->format('M d, Y') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        @if($event->description)
                                            <div class="mb-3">
                                                <strong>Description:</strong>
                                                <p class="text-muted small mb-0 mt-1">{{ Str::limit($event->description, 100) }}</p>
                                            </div>
                                        @endif

                                        @if($event->Active_status)
                                            <div class="mb-3">
                                                <strong>Status:</strong>
                                                <span class="badge bg-{{ $event->Active_status == 'active' ? 'success' : 'warning' }} ms-1">
                                                    {{ ucfirst($event->Active_status) }}
                                                </span>
                                            </div>
                                        @endif

                                        <div class="d-flex justify-content-between align-items-center">
                                            @if($event->academicYear)
                                                <span class="badge bg-secondary">{{ $event->academicYear->academic_year }}</span>
                                            @endif
                                            <small class="text-muted">
                                                Created: {{ $event->created_at->diffForHumans() }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="text-center py-5">
                                    <i class="fas fa-calendar-alt fa-3x text-muted mb-3"></i>
                                    <h5 class="text-muted">No calendar events found</h5>
                                    <p class="text-muted">Create your first academic calendar event to get started.</p>
                                    <a href="{{ route('academic-calendar.create') }}" class="btn btn-primary">
                                        <i class="fas fa-plus"></i> Add First Event
                                    </a>
                                </div>
                            </div>
                        @endforelse
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        {{ $events->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.avatar-sm {
    width: 30px;
    height: 30px;
    font-size: 12px;
}

.card {
    transition: transform 0.2s ease-in-out;
}

.card:hover {
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .card-header {
        flex-direction: column;
        gap: 1rem;
    }
    
    .card-header .btn {
        width: 100%;
    }
    
    .dropdown-menu {
        position: static !important;
        transform: none !important;
    }
}
</style>
@endsection 