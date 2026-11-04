<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRecetaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_cita' => 'sometimes|required|exists:citas,id_cita',
            'medicamentos' => 'sometimes|required|string',
            'indicaciones' => 'sometimes|required|string'
        ];
    }
}
