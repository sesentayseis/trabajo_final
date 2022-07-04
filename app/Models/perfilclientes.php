<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class perfilclientes extends Eloquent
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'direccion',
        'telefono',
        'email',
    ];
}
