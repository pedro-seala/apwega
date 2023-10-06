<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class School extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;


    /**
     * Get the first row of this model
     * @return object|null
     */
    public static function item(): object|null
    {
        return self::get()->first();
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
                'title' => 'Sucesso',
                'message' => 'Escola registada',
                'type' => 'success'
            ];
        } else {
            return [
                'status' => false,
                'title' => 'Falha',
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
        if ($this->update($request->all())) {
            return [
                'status' => true,
                'title' => 'Sucesso',
                'message' => 'Dados actualizados',
                'type' => 'success'
            ];
        } else {
            return [
                'status' => false,
                'title' => 'Falha',
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
                'message' => 'Dados eliminados',
                'type' => 'success'
            ];
        } else {
            return [
                'status' => false,
                'message' => 'Falha ao eliminar',
                'type' => 'error'
            ];
        }
    }


    /**
     * Get the county of school
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function county(): BelongsTo
    {
        return $this->belongsTo(County::class);
    }
}
