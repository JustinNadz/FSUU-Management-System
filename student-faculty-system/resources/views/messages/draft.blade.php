@extends('layouts.app')

@section('title', 'Draft Messages')

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
                        <a class="nav-link active" href="{{ route('messages.draft') }}">
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
                    <h4 class="mb-0 fw-bold text-dark">
                        <i class="fas fa-pencil-alt me-2"></i>Draft Messages
                    </h4>
                </div>
                <div class="card-body">
                    <!-- Header Actions -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <button type="button" class="btn btn-outline-primary btn-sm me-2" onclick="refreshDrafts()">
                                <i class="fas fa-sync-alt me-1"></i>Refresh
                            </button>
                            <button type="button" class="btn btn-outline-info btn-sm me-2" onclick="checkLocalStorage()">
                                <i class="fas fa-info-circle me-1"></i>Debug
                            </button>
                            <button type="button" class="btn btn-outline-danger btn-sm" onclick="deleteAllDrafts()" id="deleteAllBtn" disabled>
                                <i class="fas fa-trash me-1"></i>Delete All
                            </button>
                        </div>
                        <a href="{{ route('messages.compose') }}" class="btn btn-primary">
                            <i class="fas fa-edit me-2"></i>Compose New Message
                        </a>
                    </div>

                    <!-- Drafts Table -->
                    <div class="table-responsive" id="draftsTableContainer">
                        <table class="table table-hover mb-0" id="draftsTable">
                            <thead class="table-warning text-dark">
                                <tr>
                                    <th width="50">
                                        <input type="checkbox" class="form-check-input" id="selectAllDrafts" onchange="toggleSelectAllDrafts()">
                                    </th>
                                    <th>To</th>
                                    <th>Subject</th>
                                    <th>Message Preview</th>
                                    <th>Saved At</th>
                                    <th width="150">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="draftsTableBody">
                                <!-- Drafts will be loaded here -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Empty State -->
                    <div id="emptyDraftsState" class="text-center text-muted py-5" style="display: none;">
                        <i class="fas fa-file-alt fa-3x mb-3"></i>
                        <h5>No Draft Messages</h5>
                        <p class="mb-0">You don't have any saved draft messages.</p>
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

.table-warning {
    background-color: #fff3cd !important;
}

.btn-outline-warning {
    color: #856404;
    border-color: #ffc107;
}

.btn-outline-warning:hover {
    background-color: #ffc107;
    border-color: #ffc107;
    color: #000;
}
</style>

<script>
let drafts = [];
let selectedDrafts = new Set();

// Initialize draft page
document.addEventListener('DOMContentLoaded', function() {
    loadDrafts();
});

// Load drafts from localStorage
function loadDrafts() {
    console.log('Loading drafts from localStorage...');
    const draftsData = localStorage.getItem('drafts');
    console.log('Raw drafts data from localStorage:', draftsData);
    
    drafts = JSON.parse(draftsData || '[]');
    console.log('Parsed drafts array:', drafts);
    console.log('Number of drafts:', drafts.length);
    
    displayDrafts();
}

// Display drafts in table
function displayDrafts() {
    const tbody = document.getElementById('draftsTableBody');
    const tableContainer = document.getElementById('draftsTableContainer');
    const emptyState = document.getElementById('emptyDraftsState');
    
    if (drafts.length === 0) {
        tableContainer.style.display = 'none';
        emptyState.style.display = 'block';
        return;
    }
    
    tableContainer.style.display = 'block';
    emptyState.style.display = 'none';
    
    tbody.innerHTML = drafts.map((draft, index) => `
        <tr>
            <td>
                <input type="checkbox" class="form-check-input draft-checkbox" value="${index}" onchange="toggleDraftSelection(${index})">
            </td>
            <td>${draft.to}</td>
            <td>${draft.subject}</td>
            <td>${draft.message.length > 50 ? draft.message.substring(0, 50) + '...' : draft.message}</td>
            <td>${new Date(draft.savedAt || draft.timestamp).toLocaleDateString()}</td>
            <td>
                <button class="btn btn-sm btn-outline-warning me-1" onclick="editDraft(${index})" title="Edit Draft">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="btn btn-sm btn-outline-danger me-1" onclick="deleteDraft(${index})" title="Delete Draft">
                    <i class="fas fa-trash"></i>
                </button>
            </td>
        </tr>
    `).join('');
    
    updateDeleteAllButton();
}

// Toggle draft selection
function toggleDraftSelection(index) {
    if (selectedDrafts.has(index)) {
        selectedDrafts.delete(index);
    } else {
        selectedDrafts.add(index);
    }
    updateDeleteAllButton();
}

// Toggle select all drafts
function toggleSelectAllDrafts() {
    const selectAllCheckbox = document.getElementById('selectAllDrafts');
    const checkboxes = document.querySelectorAll('.draft-checkbox');
    
    if (selectAllCheckbox.checked) {
        checkboxes.forEach((checkbox, index) => {
            checkbox.checked = true;
            selectedDrafts.add(index);
        });
    } else {
        checkboxes.forEach((checkbox, index) => {
            checkbox.checked = false;
            selectedDrafts.delete(index);
        });
    }
    
    updateDeleteAllButton();
}

// Update delete all button state
function updateDeleteAllButton() {
    const deleteAllBtn = document.getElementById('deleteAllBtn');
    deleteAllBtn.disabled = selectedDrafts.size === 0;
}

// Edit draft (redirect to compose with draft data)
function editDraft(index) {
    const draft = drafts[index];
    
    // Save draft data to localStorage for compose page to load
    localStorage.setItem('currentDraft', JSON.stringify(draft));
    
    // Redirect to compose page
    window.location.href = '{{ route("messages.compose") }}';
}

// Delete single draft
function deleteDraft(index) {
    if (confirm('Are you sure you want to delete this draft?')) {
        drafts.splice(index, 1);
        localStorage.setItem('drafts', JSON.stringify(drafts));
        
        // Remove from selection if it was selected
        selectedDrafts.delete(index);
        
        // Reindex selected drafts
        const newSelectedDrafts = new Set();
        selectedDrafts.forEach(selectedIndex => {
            if (selectedIndex > index) {
                newSelectedDrafts.add(selectedIndex - 1);
            } else if (selectedIndex < index) {
                newSelectedDrafts.add(selectedIndex);
            }
        });
        selectedDrafts = newSelectedDrafts;
        
        displayDrafts();
        updateDeleteAllButton();
        
        showNotification('Draft deleted successfully!', 'success');
    }
}

// Delete all selected drafts
function deleteAllDrafts() {
    if (selectedDrafts.size === 0) {
        alert('Please select drafts to delete.');
        return;
    }
    
    if (confirm(`Are you sure you want to delete ${selectedDrafts.size} draft(s)?`)) {
        // Sort indices in descending order to avoid shifting issues
        const sortedIndices = Array.from(selectedDrafts).sort((a, b) => b - a);
        
        sortedIndices.forEach(index => {
            drafts.splice(index, 1);
        });
        
        localStorage.setItem('drafts', JSON.stringify(drafts));
        selectedDrafts.clear();
        
        displayDrafts();
        updateDeleteAllButton();
        
        showNotification(`${sortedIndices.length} draft(s) deleted successfully!`, 'success');
    }
}

// Refresh drafts
function refreshDrafts() {
    loadDrafts();
    showNotification('Drafts refreshed!', 'info');
}

// Debug function to check localStorage
function checkLocalStorage() {
    console.log('=== LOCALSTORAGE DEBUG ===');
    console.log('drafts key:', localStorage.getItem('drafts'));
    console.log('currentDraft key:', localStorage.getItem('currentDraft'));
    console.log('sentMessages key:', localStorage.getItem('sentMessages'));
    
    const draftsData = localStorage.getItem('drafts');
    if (draftsData) {
        try {
            const parsed = JSON.parse(draftsData);
            console.log('Parsed drafts:', parsed);
            console.log('Number of drafts:', parsed.length);
        } catch (e) {
            console.error('Error parsing drafts:', e);
        }
    }
    
    alert('Check browser console for localStorage debug info!');
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
