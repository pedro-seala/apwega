<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SchoolPlan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;


    /**
     * Get a corresponding subjec
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function school_subject(): BelongsTo
    {
        return $this->belongsTo(SchoolSubject::class);
    }


    /**
     * Get a corresponding course
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }


    /**
     * Get a correspondig schoool class
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school_class(): BelongsTo
    {
        return $this->belongsTo(SchoolClass::class);
    }


    /**
     * Get a correspondig subject category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject_category(): BelongsTo
    {
        return $this->belongsTo(SubjectCategory::class);
    }


    /**
     * Get a specific row
     * @param int $course_id
     * @param int $class_id
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function item(int $course_id, int $class_id): Collection
    {
        $collection = self::where('course_id', $course_id)
            ->where('school_class_id', $class_id)
            ->orderBy('id', 'desc')
            ->get();

        if ($collection->count()) {
            alert('Sucesso', 'Dados encontrados', 'success');
        } else {
            alert('Nota', 'Dados não encontrados', 'warning');
        }

        return $collection;
    }


    /**
     * Get all courses in Course model
     * @return \Illuminate\Database\Eloquent\Collection
     */
    static function courses(): Collection
    {
        return Course::orderBy('name', 'asc')->get();
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
     * Get all active school subjects in School Subject model
     * @return \Illuminate\Database\Eloquent\Collection
     */
    static function school_subjects(): Collection
    {
        return SchoolSubject::where('status', 1)
            ->orderBy('name', 'asc')->get();
    }


    /**
     * Get all subject categories in Subject Category model
     * @return \Illuminate\Database\Eloquent\Collection
     */
    static function subject_categories(): Collection
    {
        return SubjectCategory::orderBy('name', 'asc')->get();
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
                'message' => 'Dados registados',
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
                'message' => 'Dados eliminados',
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
