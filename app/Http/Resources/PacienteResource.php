<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PacienteResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id_paciente' => $this->id_paciente,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'sexo' => $this->sexo,
            'telefono' => $this->telefono,
            'correo' => $this->correo,
            'direccion' => $this->direccion
        ];
    }
}