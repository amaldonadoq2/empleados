<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $table = 'empresas';

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono'
    ];
}
