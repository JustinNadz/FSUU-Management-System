@extends('layouts.app')

@section('title', 'Messages - Inbox')

@section('page-title', '')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Left Navigation Sidebar -->
        <div class="col-md-3 col-lg-2 d-md-block bg-light border-end sidebar">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('messages.index') }}">
                            <i class="fas fa-inbox text-warning me-2"></i>
                            Inbox
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('messages.compose') }}">
                            <i class="fas fa-edit text-white me-2"></i>
                            Compose
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('messages.draft') }}">
                            <i class="fas fa-pencil-alt text-warning me-2"></i>
                            Draft
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('messages.sent') }}">
                            <i class="fas fa-share text-success me-2"></i>
                            Sent
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('messages.trash') }}">
                            <i class="fas fa-trash text-warning me-2"></i>
                            Trash
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0">
                    <h4 class="mb-0 fw-bold text-dark">INBOX</h4>
                </div>
                <div class="card-body">
                    <!-- Message Count and Navigation -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Message 1-1 of 1</span>
                        <div class="pagination-info">
                            <a href="#" class="text-decoration-none text-muted me-2">First</a> |
                            <a href="#" class="text-decoration-none text-muted me-2">Previous</a> |
                            <a href="#" class="text-decoration-none text-muted me-2">Next</a> |
                            <a href="#" class="text-decoration-none text-muted">Last</a>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="mb-3">
                        <button type="button" class="btn btn-outline-danger btn-sm" onclick="deleteSelectedMessages()" id="deleteBtn" disabled>
                            <i class="fas fa-trash me-1"></i>Delete
                        </button>
                    </div>
                    
                    <!-- Messages Table -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-info text-white">
                                <tr>
                                    <th width="50">
                                        <input type="checkbox" class="form-check-input" id="selectAll" onchange="toggleSelectAll()">
                                    </th>
                                    <th>Sender</th>
                                    <th>User Type</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input message-checkbox" value="1" onchange="updateDeleteButton()">
                                    </td>
                                    <td class="fw-medium">DERECHO, JENNY ROSE TRUJELLO</td>
                                    <td><span class="badge bg-success">FACULTY</span></td>
                                    <td>
                                        <a href="#" class="text-primary text-decoration-none fw-medium" onclick="openMessage()">Syllabus: BRIDG-001</a>
                                    </td>
                                    <td class="text-muted">Wed 08/23</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Bottom Action Buttons -->
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div>
                            <button type="button" class="btn btn-outline-danger btn-sm" onclick="deleteSelectedMessages()" id="deleteBtnBottom" disabled>
                                <i class="fas fa-trash me-1"></i>Delete
                            </button>
                        </div>
                        <div class="pagination-info">
                            <a href="#" class="text-decoration-none text-muted me-2" onclick="goToPage('first')">First</a> |
                            <a href="#" class="text-decoration-none text-muted me-2" onclick="goToPage('prev')">Previous</a> |
                            <a href="#" class="text-decoration-none text-muted me-2" onclick="goToPage('next')">Next</a> |
                            <a href="#" class="text-decoration-none text-muted" onclick="goToPage('last')">Last</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.sidebar {
    background-color: #f8f9fa !important;
    border-right: 2px solid #17a2b8 !important;
    min-height: calc(100vh - 200px);
}

.sidebar .nav-link {
    color: #495057;
    padding: 0.75rem 1rem;
    border-radius: 0.375rem;
    margin: 0.25rem 0;
    transition: all 0.2s ease;
}

.sidebar .nav-link:hover {
    background-color: #e9ecef;
    color: #495057;
}

.sidebar .nav-link.active {
    background-color: #17a2b8 !important;
    color: white !important;
}

.sidebar .nav-link i {
    width: 20px;
    text-align: center;
}

.card {
    border: 2px solid #17a2b8;
    border-radius: 8px;
}

.table-info {
    background-color: #17a2b8 !important;
}

.badge.bg-success {
    background-color: #28a745 !important;
    font-size: 0.8rem;
    padding: 0.4rem 0.6rem;
}

.pagination-info a:hover {
    color: #17a2b8 !important;
}

.btn-outline-danger {
    border-color: #dc3545;
    color: #dc3545;
}

.btn-outline-danger:hover {
    background-color: #dc3545;
    border-color: #dc3545;
    color: white;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Select all functionality
    const selectAllCheckbox = document.getElementById('selectAll');
    const messageCheckboxes = document.querySelectorAll('.message-checkbox');
    
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            messageCheckboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
            updateDeleteButton();
        });
    }
    
    // Individual checkbox functionality
    messageCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const checkedBoxes = document.querySelectorAll('.message-checkbox:checked');
            const totalBoxes = messageCheckboxes.length;
            
            if (checkedBoxes.length === totalBoxes) {
                selectAllCheckbox.checked = true;
            } else {
                selectAllCheckbox.checked = false;
            }
            updateDeleteButton();
        });
    });
});

// Toggle select all messages
function toggleSelectAll() {
    const selectAll = document.getElementById('selectAll');
    const checkboxes = document.querySelectorAll('.message-checkbox');
    
    checkboxes.forEach(checkbox => {
        checkbox.checked = selectAll.checked;
    });
    updateDeleteButton();
}

// Update delete button state
function updateDeleteButton() {
    const checkboxes = document.querySelectorAll('.message-checkbox:checked');
    const hasSelection = checkboxes.length > 0;
    
    // Update both delete buttons
    document.getElementById('deleteBtn').disabled = !hasSelection;
    document.getElementById('deleteBtnBottom').disabled = !hasSelection;
}

// Delete selected messages (move to trash)
function deleteSelectedMessages() {
    const checkboxes = document.querySelectorAll('.message-checkbox:checked');
    
    if (checkboxes.length === 0) {
        alert('Please select messages to delete');
        return;
    }
    
    if (confirm(`Are you sure you want to move ${checkboxes.length} message(s) to trash?`)) {
        // Store messages in localStorage for trash (you can replace this with database storage later)
        const trashMessages = JSON.parse(localStorage.getItem('trashMessages') || '[]');
        
        checkboxes.forEach(checkbox => {
            const row = checkbox.closest('tr');
            const messageData = {
                id: Date.now() + Math.random(), // Generate unique ID
                sender: row.querySelector('td:nth-child(2)').textContent,
                userType: row.querySelector('td:nth-child(3)').textContent,
                subject: row.querySelector('td:nth-child(4) a').textContent,
                date: row.querySelector('td:nth-child(5)').textContent,
                deletedAt: new Date().toLocaleString()
            };
            
            trashMessages.push(messageData);
            row.remove();
        });
        
        // Save to localStorage
        localStorage.setItem('trashMessages', JSON.stringify(trashMessages));
        
        // Reset select all checkbox
        document.getElementById('selectAll').checked = false;
        updateDeleteButton();
        
        // Show success message
        showMessage(`${checkboxes.length} message(s) moved to trash successfully!`, 'success');
    }
}

// Open message
function openMessage() {
    // Show message content in a simple alert (you can replace this with a modal later)
    const messageContent = `
From: DERECHO, JENNY ROSE TRUJELLO
Subject: Syllabus: BRIDG-001
Date: Wed 08/23

Dear Student,

Please find attached the syllabus for BRIDG-001 course. This document contains all the necessary information about the course structure, requirements, and assessment criteria.

If you have any questions, please don't hesitate to contact me.

Best regards,
DERECHO, JENNY ROSE TRUJELLO
    `;
    
    alert(messageContent);
}

// Pagination functions
function goToPage(page) {
    let message = '';
    switch(page) {
        case 'first':
            message = 'Going to first page';
            break;
        case 'prev':
            message = 'Going to previous page';
            break;
        case 'next':
            message = 'Going to next page';
            break;
        case 'last':
            message = 'Going to last page';
            break;
    }
    
    showMessage(message, 'info');
}

// Show message/notification
function showMessage(message, type = 'info') {
    // Create a simple notification
    const notification = document.createElement('div');
    notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
    notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
    notification.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.body.appendChild(notification);
    
    // Auto remove after 3 seconds
    setTimeout(() => {
        if (notification.parentNode) {
            notification.remove();
        }
    }, 3000);
}
</script>
@endsection
