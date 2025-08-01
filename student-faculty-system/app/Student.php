<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'student_id';
    
    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'address', 'age', 
        'phone_number', 'major', 'gpa', 'department_id', 'status'
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
}
