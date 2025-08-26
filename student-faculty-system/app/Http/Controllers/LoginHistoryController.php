<?php

namespace App\Http\Controllers;

use App\LoginHistory;
use App\User;
use Illuminate\Http\Request;

class LoginHistoryController extends Controller
{
    public function index()
    {
        $loginHistory = LoginHistory::with('user')->orderBy('login_time', 'desc')->paginate(20);
        return view('login-history.index', compact('loginHistory'));
    }

    public function byUser($userId)
    {
        $loginHistory = LoginHistory::where('user_id', $userId)
            ->with('user')
            ->orderBy('login_time', 'desc')
            ->paginate(20);

        return view('login-history.by-user', compact('loginHistory'));
    }

    public function recent()
    {
        $loginHistory = LoginHistory::with('user')
            ->where('login_time', '>=', now()->subDays(7))
            ->orderBy('login_time', 'desc')
            ->paginate(20);

        return view('login-history.recent', compact('loginHistory'));
    }

    public function failed()
    {
        $loginHistory = LoginHistory::with('user')
            ->where('success', false)
            ->orderBy('login_time', 'desc')
            ->paginate(20);

        return view('login-history.failed', compact('loginHistory'));
    }
} 