<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $primaryKey = 'course_id';
    
    protected $fillable = [
        'course_name', 'course_code', 'description', 'credits', 'department_id', 
        'status', 'capacity', 'prerequisites'
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

    public function prerequisites()
    {
        return $this->hasMany(CoursePrerequisite::class, 'course_id');
    }

    public function requiredBy()
    {
        return $this->hasMany(CoursePrerequisite::class, 'requires_course_id');
    }

    public function academicCalendar()
    {
        return $this->hasMany(AcademicCalendar::class, 'course_id');
    }
}
