@extends('layouts.app')

@section('title', 'Trash')

@section('page-title', '')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Left Navigation Sidebar -->
        <div class="col-md-3 col-lg-2 d-md-block bg-light border-end sidebar">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('messages.index') }}">
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
                        <a class="nav-link active" href="{{ route('messages.trash') }}">
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
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 fw-bold text-dark">TRASH</h4>
                        <div class="header-actions">
                            <button type="button" class="btn btn-outline-danger btn-sm me-2" onclick="emptyTrash()">
                                <i class="fas fa-trash me-1"></i>Empty Trash
                            </button>
                            <button type="button" class="btn btn-outline-secondary btn-sm" onclick="refreshTrash()">
                                <i class="fas fa-sync-alt me-1"></i>Refresh
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Trash Messages Table -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0" id="trashTable">
                            <thead class="table-danger text-white">
                                <tr>
                                    <th width="50">
                                        <input type="checkbox" class="form-check-input" id="selectAllTrash" onchange="toggleSelectAllTrash()">
                                    </th>
                                    <th>Sender</th>
                                    <th>User Type</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                    <th>Deleted At</th>
                                    <th width="150">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="trashTableBody">
                                <!-- Trash messages will be loaded here -->
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="mt-3 text-center">
                        <button type="button" class="btn btn-outline-success btn-sm me-2" onclick="restoreSelectedMessages()" id="restoreBtn" disabled>
                            <i class="fas fa-undo me-1"></i>Restore
                        </button>
                        <button type="button" class="btn btn-outline-danger btn-sm me-2" onclick="permanentlyDeleteSelected()" id="permanentDeleteBtn" disabled>
                            <i class="fas fa-trash me-1"></i>Delete Permanently
                        </button>
                    </div>
                    
                    <!-- Empty State -->
                    <div id="emptyTrashState" class="text-center py-5" style="display: none;">
                        <i class="fas fa-trash text-muted" style="font-size: 3rem;"></i>
                        <h5 class="text-muted mt-3">Trash is Empty</h5>
                        <p class="text-muted">Deleted messages will appear here</p>
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

.table-danger {
    background-color: #dc3545 !important;
}

.badge.bg-success {
    background-color: #28a745 !important;
    font-size: 0.8rem;
    padding: 0.4rem 0.6rem;
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

.btn-outline-success {
    border-color: #28a745;
    color: #28a745;
}

.btn-outline-success:hover {
    background-color: #28a745;
    border-color: #28a745;
    color: white;
}

.deleted-date {
    font-size: 0.8rem;
    color: #6c757d;
}
</style>

<script>
let trashMessages = [];

// Load trash messages on page load
document.addEventListener('DOMContentLoaded', function() {
    loadTrashMessages();
});

// Load messages from localStorage
function loadTrashMessages() {
    trashMessages = JSON.parse(localStorage.getItem('trashMessages') || '[]');
    displayTrashMessages();
}

// Display trash messages in table
function displayTrashMessages() {
    const tbody = document.getElementById('trashTableBody');
    const emptyState = document.getElementById('emptyTrashState');
    
    if (trashMessages.length === 0) {
        tbody.innerHTML = '';
        emptyState.style.display = 'block';
        return;
    }
    
    emptyState.style.display = 'none';
    
    tbody.innerHTML = trashMessages.map((msg, index) => `
        <tr data-index="${index}">
            <td>
                <input type="checkbox" class="form-check-input trash-checkbox" value="${index}" onchange="updateTrashActionButtons()">
            </td>
            <td class="fw-medium">${msg.sender}</td>
            <td>${msg.userType}</td>
            <td>
                <span class="text-muted">${msg.subject}</span>
            </td>
            <td class="text-muted">${msg.date}</td>
            <td class="deleted-date">${msg.deletedAt}</td>
            <td>
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-outline-success btn-sm" onclick="restoreMessage(${index})" title="Restore">
                        <i class="fas fa-undo"></i>
                    </button>
                    <button type="button" class="btn btn-outline-danger btn-sm" onclick="permanentlyDeleteMessage(${index})" title="Delete Permanently">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </td>
        </tr>
    `).join('');
    
    updateTrashActionButtons();
}

// Toggle select all trash messages
function toggleSelectAllTrash() {
    const selectAll = document.getElementById('selectAllTrash');
    const checkboxes = document.querySelectorAll('.trash-checkbox');
    
    checkboxes.forEach(checkbox => {
        checkbox.checked = selectAll.checked;
    });
    updateTrashActionButtons();
}

// Update trash action buttons
function updateTrashActionButtons() {
    const checkboxes = document.querySelectorAll('.trash-checkbox:checked');
    const hasSelection = checkboxes.length > 0;
    
    document.getElementById('restoreBtn').disabled = !hasSelection;
    document.getElementById('permanentDeleteBtn').disabled = !hasSelection;
}

// Restore selected messages
function restoreSelectedMessages() {
    const checkboxes = document.querySelectorAll('.trash-checkbox:checked');
    
    if (checkboxes.length === 0) {
        alert('Please select messages to restore');
        return;
    }
    
    if (confirm(`Are you sure you want to restore ${checkboxes.length} message(s)?`)) {
        // Get indices in reverse order to avoid shifting issues
        const indices = Array.from(checkboxes).map(cb => parseInt(cb.value)).sort((a, b) => b - a);
        
        indices.forEach(index => {
            trashMessages.splice(index, 1);
        });
        
        // Save updated trash
        localStorage.setItem('trashMessages', JSON.stringify(trashMessages));
        
        // Refresh display
        displayTrashMessages();
        
        showMessage(`${checkboxes.length} message(s) restored successfully!`, 'success');
    }
}

// Permanently delete selected messages
function permanentlyDeleteSelected() {
    const checkboxes = document.querySelectorAll('.trash-checkbox:checked');
    
    if (checkboxes.length === 0) {
        alert('Please select messages to delete permanently');
        return;
    }
    
    if (confirm(`Are you sure you want to PERMANENTLY delete ${checkboxes.length} message(s)? This action cannot be undone!`)) {
        // Get indices in reverse order to avoid shifting issues
        const indices = Array.from(checkboxes).map(cb => parseInt(cb.value)).sort((a, b) => b - a);
        
        indices.forEach(index => {
            trashMessages.splice(index, 1);
        });
        
        // Save updated trash
        localStorage.setItem('trashMessages', JSON.stringify(trashMessages));
        
        // Refresh display
        displayTrashMessages();
        
        showMessage(`${checkboxes.length} message(s) permanently deleted!`, 'success');
    }
}

// Restore single message
function restoreMessage(index) {
    if (confirm('Are you sure you want to restore this message?')) {
        trashMessages.splice(index, 1);
        localStorage.setItem('trashMessages', JSON.stringify(trashMessages));
        displayTrashMessages();
        showMessage('Message restored successfully!', 'success');
    }
}

// Permanently delete single message
function permanentlyDeleteMessage(index) {
    if (confirm('Are you sure you want to PERMANENTLY delete this message? This action cannot be undone!')) {
        trashMessages.splice(index, 1);
        localStorage.setItem('trashMessages', JSON.stringify(trashMessages));
        displayTrashMessages();
        showMessage('Message permanently deleted!', 'success');
    }
}

// Empty entire trash
function emptyTrash() {
    if (trashMessages.length === 0) {
        alert('Trash is already empty');
        return;
    }
    
    if (confirm(`Are you sure you want to permanently delete ALL ${trashMessages.length} messages in trash? This action cannot be undone!`)) {
        trashMessages = [];
        localStorage.setItem('trashMessages', JSON.stringify(trashMessages));
        displayTrashMessages();
        showMessage('Trash emptied successfully!', 'success');
    }
}

// Refresh trash
function refreshTrash() {
    loadTrashMessages();
    showMessage('Trash refreshed!', 'info');
}

// Show message/notification
function showMessage(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
    notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
    notification.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        if (notification.parentNode) {
            notification.remove();
        }
    }, 3000);
}
</script>
@endsection
