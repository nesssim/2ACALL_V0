<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'location',
        'salary_range',
        'contract_type',
        'work_type',
        'requirements',
        'benefits',
        'is_active',
        'category',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function getRequirementsListAttribute()
    {
        return $this->requirements ? explode("\n", $this->requirements) : [];
    }

    public function getBenefitsListAttribute()
    {
        return $this->benefits ? explode("\n", $this->benefits) : [];
    }
}