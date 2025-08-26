@extends('layouts.app')

@section('title', 'Sent Messages')

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
                        <a class="nav-link active" href="{{ route('messages.sent') }}">
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
                    <h4 class="mb-0 fw-bold text-dark">
                        <i class="fas fa-share me-2"></i>Sent Messages
                    </h4>
                </div>
                <div class="card-body">
                    <!-- Header Actions -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <button type="button" class="btn btn-outline-primary btn-sm me-2" onclick="refreshSentMessages()">
                                <i class="fas fa-sync-alt me-1"></i>Refresh
                            </button>
                            <button type="button" class="btn btn-outline-danger btn-sm" onclick="deleteAllSentMessages()" id="deleteAllSentBtn" disabled>
                                <i class="fas fa-trash me-1"></i>Delete All
                            </button>
                        </div>
                        <a href="{{ route('messages.compose') }}" class="btn btn-primary">
                            <i class="fas fa-edit me-2"></i>Compose New Message
                        </a>
                    </div>

                    <!-- Sent Messages Table -->
                    <div class="table-responsive" id="sentTableContainer">
                        <table class="table table-hover mb-0" id="sentTable">
                            <thead class="table-success text-dark">
                                <tr>
                                    <th width="50">
                                        <input type="checkbox" class="form-check-input" id="selectAllSent" onchange="toggleSelectAllSent()">
                                    </th>
                                    <th>To</th>
                                    <th>Subject</th>
                                    <th>Message Preview</th>
                                    <th>Sent At</th>
                                    <th width="150">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="sentTableBody">
                                <!-- Sent messages will be loaded here -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Empty State -->
                    <div id="emptySentState" class="text-center text-muted py-5" style="display: none;">
                        <i class="fas fa-paper-plane fa-3x mb-3"></i>
                        <h5>No Sent Messages</h5>
                        <p class="mb-0">You haven't sent any messages yet.</p>
                        <a href="{{ route('messages.compose') }}" class="btn btn-primary mt-3">
                            <i class="fas fa-edit me-2"></i>Compose New Message
                        </a>
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

.btn-primary {
    background-color: #17a2b8;
    border-color: #17a2b8;
}

.btn-primary:hover {
    background-color: #138496;
    border-color: #117a8b;
}

.table-success {
    background-color: #d1edff !important;
}

.btn-outline-success {
    color: #0c5460;
    border-color: #17a2b8;
}

.btn-outline-success:hover {
    background-color: #17a2b8;
    border-color: #17a2b8;
    color: #fff;
}
</style>

<script>
let sentMessages = [];
let selectedSentMessages = new Set();

// Initialize sent messages page
document.addEventListener('DOMContentLoaded', function() {
    loadSentMessages();
});

// Load sent messages from localStorage
function loadSentMessages() {
    sentMessages = JSON.parse(localStorage.getItem('sentMessages') || '[]');
    displaySentMessages();
}

// Display sent messages in table
function displaySentMessages() {
    const tbody = document.getElementById('sentTableBody');
    const tableContainer = document.getElementById('sentTableContainer');
    const emptyState = document.getElementById('emptySentState');
    
    if (sentMessages.length === 0) {
        tableContainer.style.display = 'none';
        emptyState.style.display = 'block';
        return;
    }
    
    tableContainer.style.display = 'block';
    emptyState.style.display = 'none';
    
    tbody.innerHTML = sentMessages.map((message, index) => `
        <tr>
            <td>
                <input type="checkbox" class="form-check-input sent-checkbox" value="${index}" onchange="toggleSentMessageSelection(${index})">
            </td>
            <td>${message.to}</td>
            <td>${message.subject}</td>
            <td>${message.message.length > 50 ? message.message.substring(0, 50) + '...' : message.message}</td>
            <td>${new Date(message.sentAt || message.timestamp).toLocaleDateString()}</td>
            <td>
                <button class="btn btn-sm btn-outline-success me-1" onclick="viewSentMessage(${index})" title="View Message">
                    <i class="fas fa-eye"></i>
                </button>
                <button class="btn btn-sm btn-outline-warning me-1" onclick="forwardSentMessage(${index})" title="Forward Message">
                    <i class="fas fa-share"></i>
                </button>
                <button class="btn btn-sm btn-outline-danger me-1" onclick="deleteSentMessage(${index})" title="Delete Message">
                    <i class="fas fa-trash"></i>
                </button>
            </td>
        </tr>
    `).join('');
    
    updateDeleteAllSentButton();
}

// Toggle sent message selection
function toggleSentMessageSelection(index) {
    if (selectedSentMessages.has(index)) {
        selectedSentMessages.delete(index);
    } else {
        selectedSentMessages.add(index);
    }
    updateDeleteAllSentButton();
}

// Toggle select all sent messages
function toggleSelectAllSent() {
    const selectAllCheckbox = document.getElementById('selectAllSent');
    const checkboxes = document.querySelectorAll('.sent-checkbox');
    
    if (selectAllCheckbox.checked) {
        checkboxes.forEach((checkbox, index) => {
            checkbox.checked = true;
            selectedSentMessages.add(index);
        });
    } else {
        checkboxes.forEach((checkbox, index) => {
            checkbox.checked = false;
            selectedSentMessages.delete(index);
        });
    }
    
    updateDeleteAllSentButton();
}

// Update delete all sent button state
function updateDeleteAllSentButton() {
    const deleteAllBtn = document.getElementById('deleteAllSentBtn');
    deleteAllBtn.disabled = selectedSentMessages.size === 0;
}

// View sent message
function viewSentMessage(index) {
    const message = sentMessages[index];
    
    // Create modal to show full message
    const modalHTML = `
        <div class="modal fade" id="viewSentMessageModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sent Message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <strong>To:</strong> ${message.to}
                        </div>
                        <div class="mb-3">
                            <strong>Subject:</strong> ${message.subject}
                        </div>
                        <div class="mb-3">
                            <strong>Sent:</strong> ${new Date(message.sentAt || message.timestamp).toLocaleString()}
                        </div>
                        <div class="mb-3">
                            <strong>Message:</strong>
                            <div class="border p-3 mt-2 bg-light">
                                ${message.message.replace(/\n/g, '<br>')}
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    `;
    
    // Remove existing modal if any
    const existingModal = document.getElementById('viewSentMessageModal');
    if (existingModal) {
        existingModal.remove();
    }
    
    // Add modal to page
    document.body.insertAdjacentHTML('beforeend', modalHTML);
    
    // Show modal
    const modal = new bootstrap.Modal(document.getElementById('viewSentMessageModal'));
    modal.show();
}

// Forward sent message
function forwardSentMessage(index) {
    const message = sentMessages[index];
    
    // Save message data for compose page
    const forwardData = {
        to: '',
        subject: 'Fwd: ' + message.subject,
        message: '\n\n--- Forwarded Message ---\nTo: ' + message.to + '\nSubject: ' + message.subject + '\nSent: ' + new Date(message.sentAt || message.timestamp).toLocaleString() + '\n\n' + message.message
    };
    
    localStorage.setItem('forwardData', JSON.stringify(forwardData));
    
    // Redirect to compose page
    window.location.href = '{{ route("messages.compose") }}?forward=1';
}

// Delete single sent message
function deleteSentMessage(index) {
    if (confirm('Are you sure you want to delete this sent message?')) {
        sentMessages.splice(index, 1);
        localStorage.setItem('sentMessages', JSON.stringify(sentMessages));
        
        // Remove from selection if it was selected
        selectedSentMessages.delete(index);
        
        // Reindex selected messages
        const newSelectedMessages = new Set();
        selectedSentMessages.forEach(selectedIndex => {
            if (selectedIndex > index) {
                newSelectedMessages.add(selectedIndex - 1);
            } else if (selectedIndex < index) {
                newSelectedMessages.add(selectedIndex);
            }
        });
        selectedSentMessages = newSelectedMessages;
        
        displaySentMessages();
        updateDeleteAllSentButton();
        
        showNotification('Sent message deleted successfully!', 'success');
    }
}

// Delete all selected sent messages
function deleteAllSentMessages() {
    if (selectedSentMessages.size === 0) {
        alert('Please select messages to delete.');
        return;
    }
    
    if (confirm(`Are you sure you want to delete ${selectedSentMessages.size} sent message(s)?`)) {
        // Sort indices in descending order to avoid shifting issues
        const sortedIndices = Array.from(selectedSentMessages).sort((a, b) => b - a);
        
        sortedIndices.forEach(index => {
            sentMessages.splice(index, 1);
        });
        
        localStorage.setItem('sentMessages', JSON.stringify(sentMessages));
        selectedSentMessages.clear();
        
        displaySentMessages();
        updateDeleteAllSentButton();
        
        showNotification(`${sortedIndices.length} sent message(s) deleted successfully!`, 'success');
    }
}

// Refresh sent messages
function refreshSentMessages() {
    loadSentMessages();
    showNotification('Sent messages refreshed!', 'info');
}

// Show notification
function showNotification(message, type = 'info') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
    notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
    notification.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    // Add to page
    document.body.appendChild(notification);
    
    // Auto-remove after 3 seconds
    setTimeout(() => {
        if (notification.parentNode) {
            notification.remove();
        }
    }, 3000);
}
</script>
@endsection
