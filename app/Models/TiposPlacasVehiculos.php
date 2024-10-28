<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiposPlacasVehiculos extends Model
{
    protected $table = 'tipos_placas_vehiculos';
    protected $fillable = [
        'descripcion'
    ];
}
