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

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente', 'id_paciente');
    }

    public function odontologo()
    {
        return $this->belongsTo(Odontologo::class, 'id_odontologo', 'id_odontologo');
    }

    public function tratamiento()
    {
        return $this->belongsTo(Tratamiento::class, 'id_tratamiento', 'id_tratamiento');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_cita', 'id_cita');
    }

    public function recetas()
    {
        return $this->hasMany(Receta::class, 'id_cita', 'id_cita');
    }
}