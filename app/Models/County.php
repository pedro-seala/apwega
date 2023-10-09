<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Pagination\LengthAwarePaginator;

class County extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function schools(): HasMany
    {
        return $this->hasMany(School::class);
    }

    /**
     * Get students by county
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }


    /**
     * Get paginated rows for select2
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public static function search($request): LengthAwarePaginator
    {
        return self::select('id', 'name')
                    ->where('name', 'like', '%' . $request->searchItem . '%')
                    ->paginate(8, ['*'], 'page', $request->page);
    }


    /**
     * Get all rows
     * @param int $pages
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public static function items(int $pages = 8)
    {
        return self::paginate($pages);
    }


    /**
     * Get all provinces
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function provinces(): Collection
    {
        return Province::all();
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
                'message' => 'Município registado',
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
                'message' => 'Município eliminada',
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
