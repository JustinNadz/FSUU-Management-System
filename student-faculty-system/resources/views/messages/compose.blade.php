@extends('layouts.app')

@section('title', 'Compose Message')

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
                        <a class="nav-link active" href="{{ route('messages.compose') }}">
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
                    <h4 class="mb-0 fw-bold text-dark">
                        <i class="fas fa-edit me-2"></i>Compose New Message
                    </h4>
                </div>
                <div class="card-body">
                    <form id="composeForm" action="{{ route('messages.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="to" class="form-label fw-medium">To:</label>
                            <select class="form-select" id="to" name="to" required>
                                <option value="">Select recipient...</option>
                                <optgroup label="Faculty">
                                    <option value="faculty_1">John Smith - Computer Science</option>
                                    <option value="faculty_2">Mary Wilson - Mathematics</option>
                                    <option value="faculty_3">David Brown - Physics</option>
                                </optgroup>
                                <optgroup label="Students">
                                    <option value="student_1">Alice Johnson - CS101</option>
                                    <option value="student_2">Bob Davis - MATH201</option>
                                </optgroup>
                                <optgroup label="Administrators">
                                    <option value="admin_1">System Administrator</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label fw-medium">Subject:</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter message subject" required>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label fw-medium">Message:</label>
                            <textarea class="form-control" id="message" name="message" rows="10" placeholder="Type your message here..." required></textarea>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="saveDraft" name="save_draft" value="1">
                                <label class="form-check-label" for="saveDraft">
                                    Save as draft
                                </label>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary" onclick="sendMessage()">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                            </button>
                            <button type="button" class="btn btn-secondary" onclick="saveDraft()">
                                <i class="fas fa-save me-2"></i>Save Draft
                            </button>
                            <a href="{{ route('messages.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-2"></i>Cancel
                            </a>
                        </div>
                    </form>
                    
                    <!-- Draft Status -->
                    <div id="draftStatus" class="mt-3" style="display: none;">
                        <div class="alert alert-info alert-dismissible fade show">
                            <i class="fas fa-info-circle me-2"></i>
                            <span id="draftStatusText">Draft saved successfully!</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
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

.form-control, .form-select {
    border: 1px solid #ced4da;
    border-radius: 6px;
}

.form-control:focus, .form-select:focus {
    border-color: #17a2b8;
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.25);
}

.btn-primary {
    background-color: #17a2b8;
    border-color: #17a2b8;
}

.btn-primary:hover {
    background-color: #138496;
    border-color: #117a8b;
}
</style>

<script>
let autoSaveTimer;
let currentDraft = null;

// Initialize compose page
document.addEventListener('DOMContentLoaded', function() {
    console.log('Compose page loaded!');
    
    // Load any existing draft
    loadExistingDraft();
    
    // Set up auto-save
    setupAutoSave();
    
    // Check for reply/forward parameters
    checkForReplyOrForward();
    
    // Test Save Draft button
    const saveDraftBtn = document.getElementById('saveDraft');
    if (saveDraftBtn) {
        console.log('Save Draft button found!');
        saveDraftBtn.addEventListener('click', function(e) {
            console.log('Save Draft button clicked via event listener!');
        });
    } else {
        console.error('Save Draft button not found!');
    }
});

// Set up auto-save functionality
function setupAutoSave() {
    const toField = document.getElementById('to');
    const subjectField = document.getElementById('subject');
    const messageField = document.getElementById('message');
    
    // Auto-save every 30 seconds when user is typing
    [toField, subjectField, messageField].forEach(field => {
        field.addEventListener('input', function() {
            clearTimeout(autoSaveTimer);
            autoSaveTimer = setTimeout(autoSaveDraft, 30000); // 30 seconds
        });
    });
}

// Auto-save draft
function autoSaveDraft() {
    const formData = getFormData();
    if (formData.to && formData.subject && formData.message) {
        saveDraftToDraftsFolder(formData);
        showDraftStatus('Draft auto-saved!', 'info');
    }
}

// Save draft manually
function saveDraft() {
    console.log('Save Draft button clicked!');
    
    const formData = getFormData();
    console.log('Form data:', formData);
    
    if (!formData.to && !formData.subject && !formData.message) {
        alert('Please enter some content before saving as draft.');
        return;
    }
    
    try {
        // Save to drafts folder in localStorage
        saveDraftToDraftsFolder(formData);
        
        // Show success message
        showDraftStatus('Draft saved successfully!', 'success');
        
        console.log('Draft saved, redirecting to draft folder...');
        
        // Wait a moment for the status to show, then redirect
        setTimeout(() => {
            window.location.href = '{{ route("messages.draft") }}';
        }, 1000);
        
    } catch (error) {
        console.error('Error saving draft:', error);
        alert('Error saving draft: ' + error.message);
    }
}

// Send message
function sendMessage() {
    const formData = getFormData();
    
    if (!formData.to || !formData.subject || !formData.message) {
        alert('Please fill in all required fields before sending.');
        return;
    }
    
    // Remove draft from storage if it exists
    if (currentDraft) {
        localStorage.removeItem('currentDraft');
        currentDraft = null;
    }
    
    // Save to sent folder
    saveMessageToSentFolder(formData);
    
    // Show success message
    showDraftStatus('Message sent successfully!', 'success');
    
    // Redirect to sent folder after a short delay
    setTimeout(() => {
        window.location.href = '{{ route("messages.sent") }}';
    }, 1500);
}

// Load existing draft from current session
function loadExistingDraft() {
    const draft = localStorage.getItem('currentDraft');
    if (draft) {
        try {
            currentDraft = JSON.parse(draft);
            populateForm(currentDraft);
            showDraftStatus('Draft loaded successfully!', 'info');
        } catch (e) {
            console.error('Error loading draft:', e);
        }
    }
}

// Save draft to drafts folder
function saveDraftToDraftsFolder(formData) {
    console.log('Saving draft to folder...');
    
    const drafts = JSON.parse(localStorage.getItem('drafts') || '[]');
    console.log('Current drafts:', drafts);
    
    // Get the display text for the recipient
    const toSelect = document.getElementById('to');
    const selectedOption = toSelect.options[toSelect.selectedIndex];
    const recipientDisplay = selectedOption ? selectedOption.text : formData.to;
    
    console.log('Recipient display:', recipientDisplay);
    
    // Add new draft with all necessary data
    const newDraft = {
        id: Date.now() + Math.random(),
        to: recipientDisplay,
        subject: formData.subject,
        message: formData.message,
        timestamp: new Date().toISOString(),
        savedAt: new Date().toISOString(),
        status: 'draft'
    };
    
    console.log('New draft object:', newDraft);
    
    drafts.push(newDraft);
    localStorage.setItem('drafts', JSON.stringify(drafts));
    
    // Also save as current draft
    currentDraft = newDraft;
    localStorage.setItem('currentDraft', JSON.stringify(newDraft));
    
    console.log('Draft saved successfully!');
    console.log('All drafts in localStorage:', drafts);
    console.log('localStorage drafts key:', localStorage.getItem('drafts'));
    
    return newDraft;
}

// Save message to sent folder
function saveMessageToSentFolder(formData) {
    const sentMessages = JSON.parse(localStorage.getItem('sentMessages') || '[]');
    
    // Get the display text for the recipient
    const toSelect = document.getElementById('to');
    const selectedOption = toSelect.options[toSelect.selectedIndex];
    const recipientDisplay = selectedOption ? selectedOption.text : formData.to;
    
    // Add new sent message
    const newSentMessage = {
        ...formData,
        to: recipientDisplay, // Use the display text instead of the value
        id: Date.now() + Math.random(),
        sentAt: new Date().toISOString(),
        status: 'sent'
    };
    
    sentMessages.push(newSentMessage);
    localStorage.setItem('sentMessages', JSON.stringify(sentMessages));
    
    console.log('Message sent:', newSentMessage);
    console.log('All sent messages:', sentMessages);
}

// Get form data
function getFormData() {
    return {
        to: document.getElementById('to').value,
        subject: document.getElementById('subject').value,
        message: document.getElementById('message').value,
        timestamp: new Date().toISOString()
    };
}

// Populate form with data
function populateForm(data) {
    if (data.to) document.getElementById('to').value = data.to;
    if (data.subject) document.getElementById('subject').value = data.subject;
    if (data.message) document.getElementById('message').value = data.message;
}

// Show draft status message
function showDraftStatus(message, type = 'info') {
    const statusDiv = document.getElementById('draftStatus');
    const statusText = document.getElementById('draftStatusText');
    
    statusText.textContent = message;
    statusDiv.style.display = 'block';
    
    // Auto-hide after 5 seconds
    setTimeout(() => {
        statusDiv.style.display = 'none';
    }, 5000);
}

// Check for reply or forward parameters
function checkForReplyOrForward() {
    const urlParams = new URLSearchParams(window.location.search);
    const replyId = urlParams.get('reply');
    const forwardId = urlParams.get('forward');
    
    if (replyId) {
        // Load reply data (you can implement this based on your needs)
        document.getElementById('subject').value = 'Re: Syllabus: BRIDG-001';
        document.getElementById('message').value = '\n\n--- Original Message ---\nFrom: DERECHO, JENNY ROSE TRUJELLO\nSubject: Syllabus: BRIDG-001\n\nDear Student,\n\nPlease find attached the syllabus for BRIDG-001 course...';
        showDraftStatus('Reply mode activated', 'info');
    }
    
    if (forwardId) {
        // Load forward data from localStorage
        const forwardData = localStorage.getItem('forwardData');
        if (forwardData) {
            try {
                const data = JSON.parse(forwardData);
                populateForm(data);
                localStorage.removeItem('forwardData'); // Clean up
                showDraftStatus('Forward mode activated', 'info');
            } catch (e) {
                console.error('Error loading forward data:', e);
            }
        }
    }
}

// Warn user before leaving page if they have unsaved changes
window.addEventListener('beforeunload', function(e) {
    const formData = getFormData();
    if (formData.to || formData.subject || formData.message) {
        e.preventDefault();
        e.returnValue = 'You have unsaved changes. Are you sure you want to leave?';
        return 'You have unsaved changes. Are you sure you want to leave?';
    }
});
</script>
@endsection
