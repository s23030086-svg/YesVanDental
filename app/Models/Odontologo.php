<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odontologo extends Model
{
    use HasFactory;

    protected $table = 'odontologos';

    protected $primaryKey = 'id_odontologo';

    protected $fillable = [
        'nombre',
        'apellido',
        'cedula_profesional',
        'especialidad',
        'telefono',
        'correo'
    ];
}