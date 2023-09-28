<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinePercentage extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;


    /**
     * Get a first and unique row in this model
     * @return \App\Models\FinePercentage|null
     */
    public static function fine_percentage(): self|null
    {
        return self::all()->first();
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
                'message' => 'Percentagem registada',
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
                'message' => 'Percentagem actualizada',
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
