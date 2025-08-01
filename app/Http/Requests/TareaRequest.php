<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TareaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'titulo' => 'required|string|max:255',
        'descripcion' => 'nullable|string',
        'estado' => 'required|in:pendiente,en_progreso,completada',
        'fecha_limite' => 'required|date',
    ];

    if ($this->isMethod('put') || $this->isMethod('patch')){
        // Para actualizaciones, haz los campos opcionales
        foreach ($rules as $field => &$rule) {
            $rule = 'sometimes|' . $rule;
        }
    }

    //return $rules;
    }
}
