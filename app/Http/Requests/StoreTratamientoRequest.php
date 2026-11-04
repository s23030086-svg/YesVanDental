<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTratamientoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_tratamiento' => 'required|string|max:80',
            'descripcion' => 'nullable|string',
            'costo' => 'required|numeric|min:0'
        ];
    }
}