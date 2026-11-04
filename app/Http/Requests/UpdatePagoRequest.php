<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePagoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_cita' => 'sometimes|required|exists:citas,id_cita',
            'monto' => 'sometimes|required|numeric|min:0',
            'fecha_pago' => 'sometimes|required|date',
            'metodo_pago' => 'sometimes|required|in:Efectivo,Tarjeta,Transferencia'
        ];
    }
}
