<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Robust multi-format body parsing (JSON, single-quoted JSON, form-urlencoded, query params)
        $identifier = null; $password = null;

    // Capture raw content early for debugging
    $rawInitial = $request->getContent();

    // 1. Standard request input (if Laravel parsed JSON/form already)
    $identifier = $request->input('email') ?: $request->input('username') ?: $request->input('identifier') ?: $request->input('user') ?: $request->input('id');
    $password   = $request->input('password') ?: $request->input('pass');

        // 2. Raw body JSON parse
    if ((!$identifier || !$password)) {
        $raw = $rawInitial;
            if ($raw) {
                $decoded = json_decode($raw, true);
                if (!is_array($decoded)) {
                    // Try single-quoted to double-quoted conversion
                    $fixed = preg_replace("/'([A-Za-z0-9_]+)'\s*:/", '"$1":', $raw);
                    $fixed = str_replace("'", '"', $fixed);
                    $decoded = json_decode($fixed, true);
                }
                if (is_array($decoded)) {
                    $identifier = $identifier ?: ($decoded['email'] ?? $decoded['username'] ?? $decoded['identifier'] ?? null);
            $password   = $password ?: ($decoded['password'] ?? $decoded['pass'] ?? null);
                }
            }
        }

        // 3. Fallback parse for urlencoded raw string (key=value&...)
        if ((!$identifier || !$password) && isset($rawInitial)) {
            parse_str($rawInitial, $parsedForm);
            if (is_array($parsedForm) && $parsedForm) {
                $identifier = $identifier ?: ($parsedForm['email'] ?? $parsedForm['username'] ?? $parsedForm['identifier'] ?? null);
                $password   = $password ?: ($parsedForm['password'] ?? $parsedForm['pass'] ?? null);
            }
        }

        // 4. Query parameter fallback (only in local env for debugging)
        if (app()->environment('local')) {
            $identifier = $identifier ?: ($request->query('email') ?? $request->query('username') ?? $request->query('identifier'));
            $password   = $password ?: ($request->query('password') ?? $request->query('pass'));
        }

        // Normalize identifier variable names back into request for downstream logic
        if ($identifier && !$request->has('username') && strpos((string)$identifier,'@')===false) {
            $request->merge(['username' => $identifier]);
        }
        if ($identifier && strpos((string)$identifier,'@')!==false) {
            $request->merge(['email' => $identifier]);
        }

    // Basic normalization
    if (is_string($identifier)) { $identifier = trim($identifier); }
    if (is_string($password)) { $password = trim($password); }

    // Validation after all parsing attempts
        if (!$identifier || !$password) {
            Log::warning('Login missing fields', [
                'parsed_identifier' => $identifier,
                'parsed_password_present' => (bool)$password,
                'request_all' => $request->all(),
                'raw' => $rawInitial,
                'headers' => $request->headers->all(),
            ]);
            if (!$identifier) {
                return response()->json(['message' => 'Email or username is required'], 422);
            }
            if (!$password) {
                return response()->json(['message' => 'Password is required'], 422);
            }
        }

        // If identifier looks like email, attempt standard Auth::attempt
        if (strpos($identifier, '@') !== false) {
            if (!filter_var($identifier, FILTER_VALIDATE_EMAIL)) {
                return response()->json(['message' => 'Invalid email format'], 422);
            }
            if (!Auth::attempt(['email' => $identifier, 'password' => $password])) {
                return response()->json(['message' => 'Invalid credentials'], 401);
            }
            /** @var User $user */
            $user = Auth::user();
        } else {
            // Case-insensitive matching attempt for name and email; exact for IDs
            $user = User::whereRaw('LOWER(name) = ?', [strtolower($identifier)])
                ->orWhere('employee_no', $identifier)
                ->orWhere('student_id', $identifier)
                ->orWhereRaw('LOWER(email) = ?', [strtolower($identifier)])
                ->first();
            if (!$user || !Hash::check($password, $user->password)) {
                Log::info('Login invalid credentials', [
                    'identifier_attempt' => $identifier,
                    'identifier_lower' => strtolower($identifier),
                    'found_user' => $user ? $user->id : null,
                ]);
                return response()->json(['message' => 'Invalid credentials'], 401);
            }
        }

        $token = $user->createToken('spa')->plainTextToken;
        Log::info('Login success', [
            'user_id' => $user->id,
            'identifier_used' => $identifier,
            'ip' => $request->ip(),
        ]);
        return response()->json(['token' => $token, 'user' => $user]);
    }

    public function me(Request $request)
    {
        return response()->json($request->user());
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out']);
    }
}
