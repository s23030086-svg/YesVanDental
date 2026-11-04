<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OdontologoResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id_odontologo' => $this->id_odontologo,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'cedula_profesional' => $this->cedula_profesional,
            'especialidad' => $this->especialidad,
            'telefono' => $this->telefono,
            'correo' => $this->correo
        ];
    }
}