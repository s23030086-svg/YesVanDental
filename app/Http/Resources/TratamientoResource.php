<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TratamientoResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id_tratamiento' => $this->id_tratamiento,
            'nombre_tratamiento' => $this->nombre_tratamiento,
            'descripcion' => $this->descripcion,
            'costo' => $this->costo
        ];
    }
}