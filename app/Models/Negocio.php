<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'direccion',
        'email',
        'telefono',
        'whatsapp',
        'facebook',
        'twitter',
        'linkedin',
        'instagram'
    ];
}




