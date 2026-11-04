<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExpedienteResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id_expediente' => $this->id_expediente,
            'id_paciente' => $this->id_paciente,
            'antecedentes_medicos' => $this->antecedentes_medicos,
            'alergias' => $this->alergias,
            'fecha_creacion' => $this->fecha_creacion
        ];
    }
}