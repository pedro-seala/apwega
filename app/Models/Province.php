<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get province's counties
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function counties(): HasMany
    {
        return $this->hasMany(County::class);
    }
}
