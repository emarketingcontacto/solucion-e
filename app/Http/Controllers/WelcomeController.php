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
        $servicios = Servicio::where('activo', true)->get();
        //proyectos
        $proyectos = Proyecto::where('publicado', true)
        ->with('servicio')
        ->latest()
        ->take(3)
        ->get();

        return view('welcome', compact('servicios'), compact('proyectos'));
    }
}
