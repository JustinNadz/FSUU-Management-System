<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $primaryKey = 'report_id';
    
    protected $fillable = [
        'title', 'report_type', 'category', 'created_by'
    ];
    
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
