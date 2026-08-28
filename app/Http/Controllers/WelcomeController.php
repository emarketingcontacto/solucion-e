<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Servicio;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //servicios
        $orden= [
            'seo-local',
            'sitios-web-profesionales',
            'plataformas-web-personalizadas',
            'soluciones-web-para-restaurantes',
        ];

        $servicios = Servicio::where('activo', true)
        ->whereIn('slug',$orden)
        ->get()
        ->sortBy(fn($servicio)=> array_search($servicio->slug, $orden))
        ->values();

        //proyectos
        $proyectos = Proyecto::with('servicio')
        ->where('publicado', true)
        ->where('destacado', true)
        ->latest()
        ->take(4)
        ->get();

        return view('welcome', compact('servicios'), compact('proyectos'));
    }
}
