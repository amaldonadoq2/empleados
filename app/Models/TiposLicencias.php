<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiposLicencias extends Model
{
    protected $table = 'tipos_licencias';
    protected $fillable = [
        'descripcion'
    ];
}
