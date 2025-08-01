<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    protected $primaryKey = 'enrollment_id';
    
    protected $fillable = [
        'student_id', 'course_id', 'semester', 'year', 'grade'
    ];
    
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
    
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
