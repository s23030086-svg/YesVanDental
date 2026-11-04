<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreExpedienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_paciente' => 'required|exists:pacientes,id_paciente',
            'antecedentes_medicos' => 'nullable|string',
            'alergias' => 'nullable|string',
            'fecha_creacion' => 'required|date'
            
        ];
    }
}