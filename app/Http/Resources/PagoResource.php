<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PagoResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id_pago' => $this->id_pago,
            'id_cita' => $this->id_cita,
            'monto' => $this->monto,
            'fecha_pago' => $this->fecha_pago,
            'metodo_pago' => $this->metodo_pago
        ];
    }
}