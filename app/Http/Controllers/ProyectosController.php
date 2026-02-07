<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $slug)
    {
        $proyecto = Proyecto::where('slug', $slug)->firstOrFail();
        return view('proyectos.show', compact('proyecto'));
    }
}
