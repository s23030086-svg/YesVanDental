<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreOdontologoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'cedula_profesional' => 'required|string|max:20',
            'especialidad' => 'required|string|max:50',
            'telefono' => 'required|string|max:20',
            'correo' => 'required|email|max:80'
        ];
    }
}