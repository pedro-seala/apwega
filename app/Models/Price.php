<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Pagination\LengthAwarePaginator;

class Price extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;


    /**
     * Get corresponding school year in School Year model
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school_year(): BelongsTo
    {
        return $this->belongsTo(SchoolYear::class, 'school_year_id');
    }


    /**
     * Get corresponding courses in Course model
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }


    /**
     * Get corresponding payment descriptions in Payment Desc model
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment_description(): BelongsTo
    {
        return $this->belongsTo(PaymentDescription::class, 'payment_description_id');
    }


    /**
     * Get a specific data from classes table
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school_class(): BelongsTo
    {
        return $this->belongsTo(SchoolClass::class);
    }


    /**
     * Get all classes from Class model
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function classes(): Collection
    {
        return SchoolClass::all();
    }


    /**
     * Get all courses from Course model
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function courses(): Collection
    {
        return Course::all();
    }


    /**
     * Get all school years from School Year model
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function school_years(): Collection
    {
        return SchoolYear::all();
    }


    /**
     * Get all payment descriptions from Payment description model
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function payment_descriptions(): Collection
    {
        return PaymentDescription::all();
    }


    /**
     * Get data of price table, filtering by entity
     * @param int $entity
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public static function items(int $entity, int $pages = 6): LengthAwarePaginator
    {
        return Price::where('entity', $entity)
            ->paginate($pages);
    }


    /**
     * Store the data from request to this model
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public static function store($request): array
    {
        if (self::create($request->all())) {
            return [
                'status' => true,
                'message' => 'Preço registado',
                'type' => 'success'
            ];
        } else {
            return [
                'status' => false,
                'message' => 'Falha ao registar',
                'type' => 'error'
            ];
        }
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


    /**
     * Destroy the models for given IDs
     * @return array
     */
    public function _destroy(): array
    {
        if ($this->delete()) {
            return [
                'status' => true,
                'message' => 'Preço eliminada',
                'type' => 'success'
            ];
        } else {
            return [
                'status' => false,
                'message' => 'Falha ao aliminar',
                'type' => 'error'
            ];
        }
    }
}
