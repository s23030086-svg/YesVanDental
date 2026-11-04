<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCitaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_paciente' => 'sometimes|required|exists:pacientes,id_paciente',
            'id_odontologo' => 'sometimes|required|exists:odontologos,id_odontologo',
            'id_tratamiento' => 'sometimes|required|exists:tratamientos,id_tratamiento',
            'fecha' => 'sometimes|required|date',
            'hora' => 'sometimes|required|date_format:H:i',
            'motivo' => 'sometimes|required|string|max:100',
            'estado' => 'sometimes|required|in:Pendiente,Atendida,Cancelada'
        ];
    }
}