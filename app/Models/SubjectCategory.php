<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubjectCategory extends Model
{
    use HasFactory;

    public $timestamps = false;


    /**
     * Get corresponding school plans in School Plan model
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function school_plans(): HasMany
    {
        return $this->hasMany(SchoolPlan::class, 'subject_category_id');
    }
}
