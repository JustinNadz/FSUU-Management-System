<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student & Faculty Management System')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        .main-content {
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
        }
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #dee2e6;
        }
        
        /* University Header Styles */
        .university-header {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
        }
        
        .university-logo {
            color: #ffd700;
        }
        
        .header-graphics i {
            font-size: 1.5rem;
            opacity: 0.7;
        }
        
        /* Top Navigation Styles */
        .navbar-nav .nav-link {
            padding: 0.5rem 1rem;
            color: #495057;
            font-weight: 500;
        }
        
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #007bff;
            background-color: #f8f9fa;
        }
        
        .navbar-nav .nav-link.active {
            font-weight: bold;
        }
        
        /* Message Sidebar Styles */
        .bg-light.border-end {
            background-color: #f8f9fa !important;
        }
        
        .bg-light.border-end .nav-link {
            color: #495057;
            padding: 0.75rem 1rem;
            border-radius: 0.375rem;
            margin: 0.25rem 0;
        }
        
        .bg-light.border-end .nav-link:hover {
            background-color: #e9ecef;
        }
        
        .bg-light.border-end .nav-link.active {
            background-color: #6c757d !important;
            color: white !important;
        }
        
        /* Footer Styles */
        footer {
            margin-top: auto;
        }
        
        footer .fw-bold {
            font-size: 1.1rem;
        }
        
        /* Message Table Styles */
        .table th {
            font-weight: 600;
            color: #495057;
        }
        
        .badge.bg-success {
            background-color: #28a745 !important;
        }
        
        .pagination-info {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <!-- University Header -->
    <div class="university-header bg-dark text-white py-3">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <div class="university-logo me-3">
                            <i class="fas fa-university fa-2x"></i>
                        </div>
                        <div>
                            <h3 class="mb-0">FR. SATURNINO URIOS UNIVERSITY</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <div class="header-graphics">
                        <i class="fas fa-user-graduate me-2"></i>
                        <i class="fas fa-chalkboard-teacher me-2"></i>
                        <i class="fas fa-book me-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('messages.*') ? 'active fw-bold' : '' }}" href="{{ route('messages.index') }}">
                        <i class="fas fa-envelope me-1"></i>Message
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('section.offering') ? 'active fw-bold' : '' }}" href="{{ route('section.offering') }}">
                        <i class="fas fa-list-alt me-1"></i>Section Offering
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('registration.*') ? 'active fw-bold' : '' }}" href="{{ route('registration.index') }}">
                        <i class="fas fa-user-plus me-1"></i>Registration
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="alert('Profile - Coming Soon!')">
                        <i class="fas fa-user me-1"></i>Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="alert('Schedule - Coming Soon!')">
                        <i class="fas fa-calendar-alt me-1"></i>Schedule
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="alert('Grades - Coming Soon!')">
                        <i class="fas fa-star me-1"></i>Grades
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="alert('Account - Coming Soon!')">
                        <i class="fas fa-cog me-1"></i>Account
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="alert('Calendar - Coming Soon!')">
                        <i class="fas fa-calendar me-1"></i>Calendar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="alert('Password - Coming Soon!')">
                        <i class="fas fa-key me-1"></i>Password
                    </a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="fas fa-sign-out-alt me-1"></i>SIGN OUT
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Main content -->
            <main class="col-12 px-md-4 main-content">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">@yield('page-title', 'Dashboard')</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        @yield('page-actions')
                    </div>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light border-top py-4 mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <div class="me-4">
                            <span class="fw-bold text-primary">DPO/DPS</span>
                        </div>
                        <div class="me-4">
                            <span class="fw-bold text-success">AIMS</span>
                        </div>
                        <div>
                            <span class="fw-bold text-info">Pinnacle Technologies</span>
                        </div>
                    </div>
                    <p class="text-muted mb-2">
                        Powered by <span class="fw-bold text-success">AIMS</span> from <span class="fw-bold text-info">Pinnacle Technologies</span>
                    </p>
                    <p class="text-muted mb-0">
                        For questions and comments, email us at <a href="mailto:fsuu@pinnacleasia.com" class="text-decoration-none">fsuu@pinnacleasia.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    @yield('scripts')
</body>
</html> 