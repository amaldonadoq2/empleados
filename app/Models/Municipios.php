<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    
    protected $table = 'municipios';
    protected $fillable = [
        'nombre',
        'iddepartamento'
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'iddepartamento');
    }
}
