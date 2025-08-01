<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    protected $table = 'academic_years';
    protected $primaryKey = 'year_id';
    
    protected $fillable = [
        'year_name',
        'start_date',
        'end_date',
        'is_current',
        'status'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_current' => 'boolean'
    ];

    // Ensure only one academic year is current at a time
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if ($model->is_current) {
                static::where('is_current', true)->update(['is_current' => false]);
            }
        });

        static::updating(function ($model) {
            if ($model->is_current) {
                static::where('year_id', '!=', $model->year_id)
                      ->where('is_current', true)
                      ->update(['is_current' => false]);
            }
        });
    }

    // Get the current academic year
    public static function current()
    {
        return static::where('is_current', true)->first();
    }

    // Scope for active academic years
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    // Check if this academic year is active
    public function isActive()
    {
        return $this->status === 'active';
    }

    // Get formatted year name
    public function getFormattedYearAttribute()
    {
        return $this->start_date->format('Y') . '-' . $this->end_date->format('Y');
    }
}
