@extends('layouts.app')

@section('title', 'Student Registration - Student & Faculty Management System')

@section('page-title', '')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 text-center">
                    <h5 class="mb-0 fw-bold text-dark">
                        <i class="fas fa-user-graduate me-2"></i>Student Registration
                    </h5>
                </div>
                <div class="card-body p-3">
                    <!-- Student Information Section -->
                    <div class="row mb-3">
                        <!-- Left Column - Student Details -->
                        <div class="col-md-6">
                            <div class="student-info">
                                <div class="info-row mb-2">
                                    <span class="fw-bold">Student Name:</span>
                                    <span class="ms-2">{{ $studentInfo['name'] }}</span>
                                </div>
                                <div class="info-row mb-2">
                                    <span class="fw-bold">Course:</span>
                                    <span class="ms-2">{{ $studentInfo['course'] }}</span>
                                </div>
                                <div class="info-row mb-2">
                                    <span class="fw-bold">Status:</span>
                                    <span class="ms-2">{{ $studentInfo['status'] }}</span>
                                </div>
                                <div class="info-row mb-2">
                                    <span class="fw-bold">School Year:</span>
                                    <span class="ms-2">{{ $studentInfo['school_year'] }}</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Right Column - Registration Details -->
                        <div class="col-md-6">
                            <div class="registration-info">
                                <div class="info-row mb-2">
                                    <span class="fw-bold">Student No.:</span>
                                    <span class="ms-2">{{ $studentInfo['student_no'] }}</span>
                                </div>
                                <div class="info-row mb-2">
                                    <span class="fw-bold">Year Level:</span>
                                    <span class="ms-2">{{ $studentInfo['year_level'] }}</span>
                                </div>
                                <div class="info-row mb-2">
                                    <span class="fw-bold">Section:</span>
                                    <span class="ms-2">{{ $studentInfo['section'] }}</span>
                                </div>
                                <div class="info-row mb-2">
                                    <span class="fw-bold">Semester:</span>
                                    <span class="ms-2">{{ $studentInfo['semester'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Registration Status Message -->
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="registration-status">
                                <h6 class="text-danger fw-bold mb-0">
                                    Registration is not yet open.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Bottom Dotted Line -->
            <div class="text-center mt-3">
                <div class="dotted-line"></div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    border: 2px solid #17a2b8 !important;
    border-radius: 6px;
    background-color: white;
    position: relative;
    overflow: hidden;
}

.card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, #17a2b8, #20c997, #17a2b8);
}

.card-header {
    border-bottom: 1px solid #dee2e6;
    padding: 0.75rem;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

.card-body {
    padding: 1.5rem;
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
}

.student-info, .registration-info {
    padding: 0.75rem;
    background: white;
    border-radius: 6px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    border: 1px solid #e9ecef;
}

.info-row {
    display: flex;
    align-items: flex-start;
    line-height: 1.3;
    padding: 0.5rem;
    border-radius: 4px;
    transition: all 0.2s ease;
}

.info-row .fw-bold {
    min-width: 100px;
    color: #495057;
    font-weight: 600;
    font-size: 0.9rem;
}

.info-row span:last-child {
    color: #212529;
    word-wrap: break-word;
    font-weight: 500;
    font-size: 0.9rem;
}

.registration-status {
    padding: 1rem 0.75rem;
    margin-top: 0.75rem;
    background: linear-gradient(135deg, #fff5f5 0%, #fed7d7 100%);
    border-radius: 8px;
    border: 2px solid #feb2b2;
}

.registration-status h6 {
    font-size: 1.1rem;
    color: #8B0000 !important;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    margin: 0;
}

.dotted-line {
    width: 100%;
    height: 1px;
    background: repeating-linear-gradient(
        to right,
        #dee2e6 0,
        #dee2e6 3px,
        transparent 3px,
        transparent 6px
    );
    margin: 0 auto;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .info-row {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .info-row .fw-bold {
        min-width: auto;
        margin-bottom: 0.25rem;
    }
    
    .registration-status h6 {
        font-size: 1rem;
    }
    
    .card-body {
        padding: 1rem;
    }
}

/* Hover effects */
.card:hover {
    box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.15);
    transition: box-shadow 0.3s ease;
}

.info-row:hover {
    background-color: #f8f9fa;
    border-radius: 4px;
    padding: 0.5rem;
    margin: 0.25rem -0.25rem;
    transition: all 0.2s ease;
    transform: translateX(3px);
}

.student-info:hover, .registration-info:hover {
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    transition: box-shadow 0.3s ease;
}

/* Animation for the status message */
.registration-status {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.01); }
    100% { transform: scale(1); }
}
</style>
@endsection
