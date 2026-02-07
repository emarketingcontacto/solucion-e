<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $proyectos = Proyecto::all();
        return response()->view('sitemaps.index',['proyectos'=>$proyectos])->header('Content-Type', 'text/xml');
    }
}
