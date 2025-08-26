<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginHistory extends Model
{
    protected $primaryKey = 'login_id';
    protected $table = 'login_history';
    
    protected $fillable = [
        'user_id',
        'login_time',
        'ip_address',
        'user_agent',
        'success',
        'failure_reason'
    ];

    protected $casts = [
        'login_time' => 'datetime',
        'success' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
} 