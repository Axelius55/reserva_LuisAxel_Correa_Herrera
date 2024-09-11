<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table ='reservas';

    protected $fillable=['nombre_sala','fecha_reserva','hora_inicio','hora_fin','nombre_cliente'];
}
