<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
            'proccessNb' => 'nullable|numeric',
            'name' => 'required|string|max:64',
            'gender' => 'required|integer',
            'father' => 'nullable|string|max:64',
            'mother' => 'nullable|string|max:64',
            'birthDate' => 'required|date',
            'identityCard' => 'required|max:14',
            'icIssueDate' => 'nullable|date',
            'county_id' => 'required|integer',
            'address' => 'nullable|max:32'
        ];
    }

    public function attributes(): array
    {
        return [
            'processNb' => 'processo',
            'gender' => 'género',
            'father' => 'nome do pai',
            'mother' => 'nome da mãe',
            'birthDate' => 'data de nascimento',
            'identityCard' => 'identificação',
            'icIssueDate' => 'data de emissão',
            'county_id' => 'município',
            'address' => 'morada'
        ];
    }
}
