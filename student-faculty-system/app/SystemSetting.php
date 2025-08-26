<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemSetting extends Model
{
    protected $primaryKey = 'setting_id';
    protected $table = 'system_settings';
    
    protected $fillable = [
        'setting_name',
        'setting_value',
        'description',
        'data_type',
        'updated_by',
        'last_updated'
    ];

    protected $casts = [
        'last_updated' => 'datetime',
    ];

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
} 