<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicCalendar extends Model
{
    protected $primaryKey = 'event_id';
    protected $table = 'academic_calendar';
    
    protected $fillable = [
        'student_id',
        'academic_year_id',
        'Active_status',
        'School_year',
        'title',
        'description',
        'start_date',
        'end_date',
        'course_id'
    ];

    protected $casts = [
        'School_year' => 'date',
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
} 