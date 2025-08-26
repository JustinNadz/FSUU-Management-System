<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacultyCourse extends Model
{
    protected $primaryKey = 'faculty_course_id';
    
    protected $fillable = [
        'faculty_id', 'course_id', 'semester', 'year', 'section', 
        'classroom', 'schedule', 'enrollment_count'
    ];
    
    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id');
    }
    
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
