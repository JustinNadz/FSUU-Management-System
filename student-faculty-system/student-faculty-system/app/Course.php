<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $primaryKey = 'course_id';
    
    protected $fillable = [
        'course_name', 'course_code', 'credits', 'department_id', 'status'
    ];
    
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
    
    public function facultyCourses()
    {
        return $this->hasMany(FacultyCourse::class, 'course_id');
    }
    
    public function studentCourses()
    {
        return $this->hasMany(StudentCourse::class, 'course_id');
    }
}
