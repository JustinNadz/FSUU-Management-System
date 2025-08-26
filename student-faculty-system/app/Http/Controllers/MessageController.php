<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        // Mock data for demonstration - you can replace this with actual database queries
        $messages = [
            [
                'id' => 1,
                'sender' => 'John Smith',
                'user_type' => 'Faculty',
                'subject' => 'Course Schedule Update',
                'date' => '2025-01-15 10:30:00',
                'read' => false
            ],
            [
                'id' => 2,
                'sender' => 'Mary Wilson',
                'user_type' => 'Student',
                'subject' => 'Assignment Question',
                'date' => '2025-01-14 15:45:00',
                'read' => true
            ],
            [
                'id' => 3,
                'sender' => 'David Brown',
                'user_type' => 'Admin',
                'subject' => 'System Maintenance Notice',
                'date' => '2025-01-13 09:15:00',
                'read' => false
            ]
        ];

        return view('messages.index', compact('messages'));
    }

    public function compose()
    {
        return view('messages.compose');
    }

    public function draft()
    {
        return view('messages.draft');
    }

    public function sent()
    {
        return view('messages.sent');
    }

    public function trash()
    {
        return view('messages.trash');
    }

    public function store(Request $request)
    {
        // Handle message composition
        $request->validate([
            'to' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        // Here you would save the message to the database
        // For now, just redirect with success message
        
        return redirect()->route('messages.index')->with('success', 'Message sent successfully!');
    }

    public function destroy($id)
    {
        // Handle message deletion
        // Here you would delete the message from the database
        
        return redirect()->route('messages.index')->with('success', 'Message deleted successfully!');
    }
}
