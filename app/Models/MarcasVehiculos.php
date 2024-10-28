<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarcasVehiculos extends Model
{
    protected $table = 'marcas_vehiculos';
    protected $fillable = [
        'descripcion'
    ];
}
