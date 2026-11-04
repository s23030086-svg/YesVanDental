<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $table = 'citas';

    protected $primaryKey = 'id_cita';

   protected $fillable = [
    'id_paciente',
    'id_odontologo',
    'id_tratamiento',
    'fecha',
    'hora',
    'motivo',
    'estado'
    ];
}
