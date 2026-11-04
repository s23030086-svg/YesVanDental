<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StorePacienteRequest extends FormRequest
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
            'fecha_nacimiento' => 'required|date',
            'sexo' => 'required|string|size:1',
            'telefono' => 'required|string|max:20',
            'correo' => 'required|email|max:80',
            'direccion' => 'required|string|max:120'
        ];
    }
}
