<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Servicio extends Model
{
    protected $fillable=[
        'nombre',
        'slug',
        'descripcion',
        'imagen',
        'precio',
        'activo'
    ];

    public function proyectos(){
        return $this->hasMany(Proyecto::class);
    }


    protected static function booted()
    {
        static::updating(function (Servicio $servicio) {
            // isDirty detecta si el campo 'imagen' cambió en este request
        if ($servicio->isDirty('imagen')) {
            $oldImage = $servicio->getOriginal('imagen');

            if($oldImage){
                Storage::disk('public')->delete($oldImage);
            }
        }
    });

    // Cuando el registro se elimina por completo
        static::deleted(function (Servicio $servicio) {
            if($servicio->imagen){
                Storage::disk('public')->delete($servicio->imagen);
            }
        });
    }
}
