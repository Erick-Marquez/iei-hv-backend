<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SectionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {

        if ($this->isMethod('PUT')) {
            $sectionRule = Rule::unique('sections', 'section')->where(function ($query) {
                $query->where('grade_id', $this->grade_id);
            })->ignore($this->id);
        } else {
            $sectionRule = Rule::unique('sections', 'section')->where(function ($query) {
                $query->where('grade_id', $this->grade_id);
            });
        }
        
        return [
            'section' => ['required', $sectionRule],
            'shift' => 'required',
            'grade_id' => 'required'
        ];
    }

    public function messages(): array
    {
        return [

            'section.required' => 'La sección es requerida.',
            'section.unique' => 'Ya existe la sección ingresada.',

            'shift.required' => 'El turno es requerido.',

            'grade_id.required' => 'El grado es requerido.',
        ];
    }
}
