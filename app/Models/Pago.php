<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = 'pagos';

    protected $primaryKey = 'id_pago';

    protected $fillable = [
        'id_cita',
        'monto',
        'fecha_pago',
        'metodo_pago'
    ];
}