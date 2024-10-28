<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ColoresVehiculos extends Model
{
    protected $table = 'colores_vehiculos';
    protected $fillable = [
        'descripcion'
    ];
}
