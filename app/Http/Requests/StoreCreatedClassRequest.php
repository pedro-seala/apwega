<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCreatedClassRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'school_year_id' => 'required|integer',
            'school_class_id' => 'required|integer',
            'course_id' => 'required|integer',
            'day_period' => 'required|string',
            'room_number' => 'nullable|integer',
            'description' => 'required|string|max:4|unique:created_classes,description',
            'student_limit' => 'required|integer'
        ];
    }

    public function attributes(): array
    {
        return [
            'school_year_id' => 'ano letivo',
            'school_class_id' => 'classe',
            'course_id' => 'curso',
            'day_period' => 'período',
            'room_number' => 'nº da sala',
            'description' => 'descrição',
            'student_limit' => 'nº de alunos'
        ];
    }
}
