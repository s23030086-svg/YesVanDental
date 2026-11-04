<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RecetaResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id_receta' => $this->id_receta,
            'id_cita' => $this->id_cita,
            'medicamentos' => $this->medicamentos,
            'indicaciones' => $this->indicaciones
        ];
    }
}