<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Proyecto extends Model
{
    protected $fillable = [
        'servicio_id',
        'cliente_nombre',
        'slug',
        'problema',
        'resultado',
        'solucion',
        'url',
        'imagen_proyecto',
        'publicado'
    ];

    public function servicio(){
        return $this->belongsTo(Servicio::class);
    }

      protected static function booted()
    {
        static::updating(function (Proyecto $proyecto) {
            // isDirty detecta si el campo 'imagen' cambió en este request
        if ($proyecto->isDirty('imagen_proyecto')) {
            $oldImage = $proyecto->getOriginal('imagen_proyecto');

            if($oldImage){
                Storage::disk('public')->delete($oldImage);
            }
        }
    });

        // Cuando el registro se elimina por completo
        static::deleted(function (Proyecto $proyecto) {
            if($proyecto->imagen_proyecto){
                Storage::disk('public')->delete($proyecto->imagen_proyecto);
            }
        });
    }
}
