<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateExpedienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_paciente' => 'sometimes|required|exists:pacientes,id_paciente',
            'antecedentes_medicos' => 'sometimes|nullable|string',
            'alergias' => 'sometimes|nullable|string',
            'fecha_creacion' => 'sometimes|required|date'
        ];
    }
}