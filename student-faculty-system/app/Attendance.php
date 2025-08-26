<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $primaryKey = 'attendance_id';
    protected $table = 'attendance';
    
    protected $fillable = [
        'enrollment_id',
        'date',
        'status',
        'notes',
        'recorded_by',
        'recorded_at'
    ];

    protected $casts = [
        'date' => 'date',
        'recorded_at' => 'datetime',
    ];

    public function enrollment()
    {
        return $this->belongsTo(StudentCourse::class, 'enrollment_id');
    }

    public function recordedBy()
    {
        return $this->belongsTo(User::class, 'recorded_by');
    }
} 