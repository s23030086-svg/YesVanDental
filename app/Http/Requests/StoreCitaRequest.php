<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCitaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_paciente' => 'required|exists:pacientes,id_paciente',
            'id_odontologo' => 'required|exists:odontologos,id_odontologo',
            'id_tratamiento' => 'required|exists:tratamientos,id_tratamiento',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'motivo' => 'required|string|max:100',
            'estado' => 'sometimes|in:Pendiente,Atendida,Cancelada'
        ];
    }
}
