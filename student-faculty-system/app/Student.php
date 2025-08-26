<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'student_id';
    
    protected $fillable = [
        'user_id', 'full_name', 'birth_date', 'address', 'city', 'state', 
        'zip_code', 'country', 'age', 'phone_number', 'major', 'gpa', 
        'department_id', 'status', 'enrollment_date', 'expected_graduation_date', 'advisor_id'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
    
    public function studentCourses()
    {
        return $this->hasMany(StudentCourse::class, 'student_id');
    }

    public function advisor()
    {
        return $this->belongsTo(Faculty::class, 'advisor_id');
    }

    public function academicCalendar()
    {
        return $this->hasMany(AcademicCalendar::class, 'student_id');
    }
}
