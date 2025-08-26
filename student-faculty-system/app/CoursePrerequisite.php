<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoursePrerequisite extends Model
{
    protected $primaryKey = 'prerequisite_id';
    
    protected $fillable = [
        'course_id',
        'requires_course_id',
        'mandatory',
        'notes'
    ];

    protected $casts = [
        'mandatory' => 'boolean',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function requiredCourse()
    {
        return $this->belongsTo(Course::class, 'requires_course_id');
    }
} 