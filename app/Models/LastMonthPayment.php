<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LastMonthPayment extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;


    /**
     * Get a correspondig schoool class
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school_class(): BelongsTo
    {
        return $this->belongsTo(SchoolClass::class, 'school_class_id');
    }


    /**
     * Get all classes in Classe model
     * @return \Illuminate\Database\Eloquent\Collection
     */
    static function school_classes(): Collection
    {
        return SchoolClass::orderBy('level', 'asc')->get();
    }


    /**
     * Get correspondig month
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function month(): BelongsTo
    {
        return $this->belongsTo(Month::class);
    }


    /**
     * Get all months in Month model
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function months(): Collection
    {
        return Month::all();
    }


    /**
     * Get a first and unique row in this model
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function last_months(): Collection
    {
        return self::all();
    }


    /**
     * Update the data from request to this model
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function _update($request): array
    {
        if ($this->update(attributes: $request->all())) {
            return [
                'status' => true,
                'message' => 'Dados actualizados',
                'type' => 'success'
            ];
        } else {
            return [
                'status' => false,
                'message' => 'Falha ao actualizar',
                'type' => 'error'
            ];
        }
    }
}
