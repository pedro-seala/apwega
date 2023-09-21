<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quarter extends Model
{
    use HasFactory;

    public $timestamps = false;


    /**
     * Get corresponding seal notes in Seal Note model
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seal_notes(): HasMany
    {
        return $this->hasMany(SealNote::class);
    }
}
