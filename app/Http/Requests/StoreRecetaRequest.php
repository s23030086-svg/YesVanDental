<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRecetaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_cita' => 'required|exists:citas,id_cita',
            'medicamentos' => 'required|string',
            'indicaciones' => 'required|string'
        ];
    }
}