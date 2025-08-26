<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'department_id';
    
    protected $fillable = [
        'department_name', 'department_code', 'head_of_department', 'office_location',
        'phone_number', 'email', 'established_date'
    ];
    
    public function faculty()
    {
        return $this->hasMany(Faculty::class, 'department_id');
    }
    
    public function students()
    {
        return $this->hasMany(Student::class, 'department_id');
    }
    
    public function courses()
    {
        return $this->hasMany(Course::class, 'department_id');
    }

    public function headOfDepartment()
    {
        return $this->belongsTo(Faculty::class, 'head_of_department');
    }
}
