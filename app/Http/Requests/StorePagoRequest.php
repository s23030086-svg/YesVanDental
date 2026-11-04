<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StorePagoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_cita' => 'required|exists:citas,id_cita',
            'monto' => 'required|numeric|min:0',
            'fecha_pago' => 'required|date',
            'metodo_pago' => 'required|in:Efectivo,Tarjeta,Transferencia'
        ];
    }
}
