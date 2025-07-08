<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'subject',
        'message',
        'status',
        'admin_notes',
        'read_at',
    ];

    protected $casts = [
        'read_at' => 'datetime',
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function scopeUnread($query)
    {
        return $query->where('status', 'nouveau');
    }

    public function scopeRead($query)
    {
        return $query->where('status', '!=', 'nouveau');
    }

    public function markAsRead()
    {
        $this->update([
            'status' => 'lu',
            'read_at' => now(),
        ]);
    }
}