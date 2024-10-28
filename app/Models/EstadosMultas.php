<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadosMultas extends Model
{
    protected $table = 'estados_multas';
    protected $fillable = [
        'descripcion'
    ];
}
