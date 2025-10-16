<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function me(Request $request)
    {
        return new UserResource($request->user());
    }

    public function updateMe(Request $request)
    {
        $data = $request->validate([
            'name' => ['sometimes','string','max:255'],
            'email' => ['sometimes','email','max:255'],
            'department_code' => ['sometimes','nullable','string','max:16'],
            'course_code' => ['sometimes','nullable','string','max:16'],
        ]);
        $user = $request->user();
        $user->fill($data);
        $user->save();
        return new UserResource($user);
    }

    public function uploadAvatar(Request $request)
    {
        $request->validate([
            'avatar' => ['required','image','max:2048']
        ]);
        $path = $request->file('avatar')->store('avatars', 'public');
        $user = $request->user();
        // Store relative storage path; resource will expand to absolute APP_URL
        $user->avatar_url = 'storage/' . ltrim($path, '/');
        $user->save();
        // Return absolute URL for immediate use
        $absolute = rtrim(config('app.url'), '/') . '/' . $user->avatar_url;
        return response()->json(['avatar_url' => $absolute]);
    }

    public function changePassword(Request $request)
    {
        $data = $request->validate([
            'current_password' => ['required','string','min:6'],
            'password' => ['required','string','min:6','confirmed'],
        ]);
        $user = $request->user();
        if (!\Illuminate\Support\Facades\Hash::check($data['current_password'], $user->password)) {
            return response()->json(['message' => 'Current password is incorrect'], 422);
        }
        $user->password = \Illuminate\Support\Facades\Hash::make($data['password']);
        $user->save();
        return response()->json(['message' => 'Password updated']);
    }

    public function getProfile(Request $request)
    {
        $user = $request->user();
        $row = DB::table('student_profiles')->where('user_id', $user->id)->first();
        $data = $row ? json_decode($row->data ?: '{}', true) : [];
        return response()->json(['data' => $data]);
    }

    public function updateProfile(Request $request)
    {
        $user = $request->user();
        $payload = $request->validate([
            'data' => ['array']
        ]);
        $json = json_encode($payload['data'] ?? [], JSON_UNESCAPED_UNICODE);
        $exists = DB::table('student_profiles')->where('user_id', $user->id)->first();
        if ($exists) {
            DB::table('student_profiles')->where('user_id', $user->id)->update([
                'data' => $json,
                'updated_at' => now(),
            ]);
        } else {
            DB::table('student_profiles')->insert([
                'user_id' => $user->id,
                'data' => $json,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        return response()->json(['status' => 'ok']);
    }
}


