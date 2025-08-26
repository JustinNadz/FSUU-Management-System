<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    protected $primaryKey = 'enrollment_id';
    
    protected $fillable = [
        'student_id', 'course_id', 'faculty_id', 'semester', 'year', 'section',
        'grade', 'grade_points', 'status', 'registration_date', 'last_updated'
    ];
    
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
    
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id');
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class, 'enrollment_id');
    }
}
