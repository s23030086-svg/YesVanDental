<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;


class UpdateOdontologoRequest extends FormRequest
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
            'cedula_profesional' => 'sometimes|required|string|max:20',
            'especialidad' => 'sometimes|required|string|max:50',
            'telefono' => 'sometimes|required|string|max:20',
            'correo' => 'sometimes|required|email|max:80'
        ];
    }
}
