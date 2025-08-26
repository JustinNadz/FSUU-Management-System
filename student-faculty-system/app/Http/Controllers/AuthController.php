<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }
    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        // Try to authenticate with username or email
        $loginField = filter_var($credentials['username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $credentials[$loginField] = $credentials['username'];
        
        // Debug: Log the credentials being used
        \Log::info('Login attempt', [
            'original_username' => $request->input('username'),
            'login_field' => $loginField,
            'final_credentials' => $credentials
        ]);
        
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            \Log::info('Login successful', [
                'user_id' => $user->user_id,
                'username' => $user->username,
                'role' => $user->role
            ]);
            
            $request->session()->regenerate();
            
            // Redirect based on user role
            switch ($user->role) {
                case 'admin':
                    return redirect()->intended('/dashboard');
                case 'faculty':
                    return redirect()->intended('/faculty-dashboard');
                case 'student':
                    return redirect()->intended('/section-offering');
                default:
                    return redirect()->intended('/dashboard');
            }
        }
        
        \Log::warning('Login failed', [
            'credentials' => $credentials,
            'login_field' => $loginField,
            'user_exists' => isset($credentials[$loginField]) ? \App\User::where($loginField, $credentials[$loginField])->exists() : false
        ]);
        
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login');
    }
}
