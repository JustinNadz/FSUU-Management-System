<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        $avatar = $this->avatar_url ?? null;
        if ($avatar) {
            // Normalize to absolute URL using APP_URL when a relative path is stored
            if (strpos($avatar, 'http://') !== 0 && strpos($avatar, 'https://') !== 0) {
                $base = rtrim(config('app.url'), '/');
                $avatar = $base . '/' . ltrim($avatar, '/');
            }
        }
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role ?? null,
            'student_id' => $this->student_id ?? null,
            'employee_no' => $this->employee_no ?? null,
            'avatar_url' => $avatar,
            'department_code' => $this->department_code ?? null,
            'course_code' => $this->course_code ?? null,
            'status' => $this->status ?? null,
            'created_at' => optional($this->created_at)->toIso8601String(),
            'updated_at' => optional($this->updated_at)->toIso8601String(),
        ];
    }
}


