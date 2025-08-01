<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculty';
    protected $primaryKey = 'faculty_id';
    
    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'department_id', 'position'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
    
    public function facultyCourses()
    {
        return $this->hasMany(FacultyCourse::class, 'faculty_id');
    }
}
