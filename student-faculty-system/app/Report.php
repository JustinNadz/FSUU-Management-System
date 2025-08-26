<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $primaryKey = 'report_id';
    
    protected $fillable = [
        'title', 'report_type', 'category', 'description', 'parameters',
        'created_by', 'status', 'schedule', 'is_public'
    ];
    
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
