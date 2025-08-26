<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student & Faculty Management System - Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h3><i class="fas fa-graduation-cap me-2"></i>Student & Faculty Management System</h3>
                        <p class="mb-0">System Status Check</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="text-success"><i class="fas fa-check-circle me-2"></i>System Components</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fas fa-check text-success me-2"></i>Laravel 7 Framework</li>
                                    <li class="list-group-item"><i class="fas fa-check text-success me-2"></i>Authentication System</li>
                                    <li class="list-group-item"><i class="fas fa-check text-success me-2"></i>Database Migrations</li>
                                    <li class="list-group-item"><i class="fas fa-check text-success me-2"></i>Eloquent Models</li>
                                    <li class="list-group-item"><i class="fas fa-check text-success me-2"></i>Controllers</li>
                                    <li class="list-group-item"><i class="fas fa-check text-success me-2"></i>Views & Templates</li>
                                    <li class="list-group-item"><i class="fas fa-check text-success me-2"></i>Routes Configuration</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-info"><i class="fas fa-database me-2"></i>Database Schema</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fas fa-table text-info me-2"></i>Users Table</li>
                                    <li class="list-group-item"><i class="fas fa-table text-info me-2"></i>Departments Table</li>
                                    <li class="list-group-item"><i class="fas fa-table text-info me-2"></i>Faculty Table</li>
                                    <li class="list-group-item"><i class="fas fa-table text-info me-2"></i>Students Table</li>
                                    <li class="list-group-item"><i class="fas fa-table text-info me-2"></i>Courses Table</li>
                                    <li class="list-group-item"><i class="fas fa-table text-info me-2"></i>Faculty_Courses Table</li>
                                    <li class="list-group-item"><i class="fas fa-table text-info me-2"></i>Student_Courses Table</li>
                                    <li class="list-group-item"><i class="fas fa-table text-info me-2"></i>Reports Table</li>
                                </ul>
                            </div>
                        </div>
                        
                        <hr>
                        
                        <div class="alert alert-warning">
                            <h6><i class="fas fa-exclamation-triangle me-2"></i>Database Setup Required</h6>
                            <p class="mb-2">To complete the setup, you need to:</p>
                            <ol>
                                <li>Enable SQLite PDO driver in php.ini</li>
                                <li>Run: <code>php artisan migrate</code></li>
                                <li>Run: <code>php artisan db:seed</code></li>
                            </ol>
                        </div>
                        
                        <div class="text-center">
                            <a href="/login" class="btn btn-primary me-2">
                                <i class="fas fa-sign-in-alt me-2"></i>Go to Login
                            </a>
                            <a href="/dashboard" class="btn btn-success">
                                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 