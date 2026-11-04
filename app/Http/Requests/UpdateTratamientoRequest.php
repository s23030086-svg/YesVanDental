<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTratamientoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_tratamiento' => 'sometimes|required|string|max:80',
            'descripcion' => 'sometimes|nullable|string',
            'costo' => 'sometimes|required|numeric|min:0'
        ];
    }
}

