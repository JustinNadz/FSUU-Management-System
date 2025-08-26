<?php

namespace App\Http\Controllers;

use App\AdminLog;
use Illuminate\Http\Request;

class AdminLogController extends Controller
{
    public function index()
    {
        $logs = AdminLog::with('user')->orderBy('timestamp', 'desc')->paginate(20);
        return view('admin-logs.index', compact('logs'));
    }

    public function byUser($userId)
    {
        $logs = AdminLog::where('user_id', $userId)
            ->with('user')
            ->orderBy('timestamp', 'desc')
            ->paginate(20);

        return view('admin-logs.by-user', compact('logs'));
    }

    public function byEntity($entityType, $entityId)
    {
        $logs = AdminLog::where('entity_type', $entityType)
            ->where('entity_id', $entityId)
            ->with('user')
            ->orderBy('timestamp', 'desc')
            ->paginate(20);

        return view('admin-logs.by-entity', compact('logs'));
    }
} 