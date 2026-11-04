<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePacienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => 'sometimes|required|string|max:50',
            'apellido' => 'sometimes|required|string|max:50',
            'fecha_nacimiento' => 'sometimes|required|date',
            'sexo' => 'sometimes|required|string|size:1',
            'telefono' => 'sometimes|required|string|max:20',
            'correo' => 'sometimes|required|email|max:80',
            'direccion' => 'sometimes|required|string|max:120'
        ];
    }
}