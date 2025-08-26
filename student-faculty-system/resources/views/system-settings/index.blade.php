@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">System Settings</h4>
                    <a href="{{ route('system-settings.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Setting
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
                        @forelse($settings as $setting)
                            <div class="col-12 col-md-6 col-lg-4 mb-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                            <h6 class="card-title mb-0 text-primary">{{ $setting->setting_name }}</h6>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{ route('system-settings.show', $setting) }}">
                                                        <i class="fas fa-eye"></i> View
                                                    </a></li>
                                                    <li><a class="dropdown-item" href="{{ route('system-settings.edit', $setting) }}">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li>
                                                        <form action="{{ route('system-settings.destroy', $setting) }}" method="POST" class="d-inline">
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
                                        
                                        <div class="mb-3">
                                            <strong>Value:</strong>
                                            <div class="mt-1">
                                                @if($setting->data_type == 'boolean')
                                                    <span class="badge bg-{{ $setting->setting_value == 'true' ? 'success' : 'danger' }}">
                                                        {{ $setting->setting_value == 'true' ? 'True' : 'False' }}
                                                    </span>
                                                @elseif($setting->data_type == 'date')
                                                    <span class="text-muted">{{ \Carbon\Carbon::parse($setting->setting_value)->format('M d, Y') }}</span>
                                                @else
                                                    <span class="text-break">{{ $setting->setting_value }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        @if($setting->description)
                                            <div class="mb-3">
                                                <strong>Description:</strong>
                                                <p class="text-muted small mb-0 mt-1">{{ $setting->description }}</p>
                                            </div>
                                        @endif

                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge bg-secondary">{{ ucfirst($setting->data_type) }}</span>
                                            <small class="text-muted">
                                                Updated: {{ $setting->last_updated->diffForHumans() }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="text-center py-5">
                                    <i class="fas fa-cogs fa-3x text-muted mb-3"></i>
                                    <h5 class="text-muted">No system settings found</h5>
                                    <p class="text-muted">Create your first system setting to get started.</p>
                                    <a href="{{ route('system-settings.create') }}" class="btn btn-primary">
                                        <i class="fas fa-plus"></i> Add First Setting
                                    </a>
                                </div>
                            </div>
                        @endforelse
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        {{ $settings->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
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