<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminLog extends Model
{
    protected $primaryKey = 'log_id';
    protected $table = 'admin_logs';
    
    protected $fillable = [
        'user_id',
        'action',
        'entity_type',
        'entity_id',
        'timestamp',
        'ip_address'
    ];

    protected $casts = [
        'timestamp' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
} 