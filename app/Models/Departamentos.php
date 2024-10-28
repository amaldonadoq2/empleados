<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    
    protected $table = 'departamentos';
    protected $fillable = [
        'nombre',
        'idpais'
    ];

    public function municipios(){
        return $this->hasMany(Municipio::class, 'iddepartamento');
    }
}
