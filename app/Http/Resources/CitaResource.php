<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CitaResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id_cita' => $this->id_cita,
            'id_paciente' => $this->id_paciente,
            'id_odontologo' => $this->id_odontologo,
            'id_tratamiento' => $this->id_tratamiento,
            'fecha' => $this->fecha,
            'hora' => $this->hora,
            'motivo' => $this->motivo,
            'estado' => $this->estado
        ];
    }
}