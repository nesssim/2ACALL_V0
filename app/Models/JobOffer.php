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
    'salary',
    'is_salary_negotiable',
    'contract_type',
    'work_type',
    'requirements',
    'benefits',
    'is_active',
    'category',
];

protected $casts = [
    'is_active' => 'boolean',
    'is_salary_negotiable' => 'boolean',
    'salary' => 'float',
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