<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //SEO Local
    public function seolocal(){

        $proyectos = Proyecto::whereHas('servicio', function($query) {
            $query->where('nombre', 'like', '%SEO%'); // O usa el ID exacto
        })->where('publicado', true)->get();

        return view('servicios.seo', [
            'titulo'=>'SEO Local & Panel de Control',
            'meta_desc'=> 'Estrategias de posicionamiento local con autogestion total para tu negocio.',
            'proyectos'=>$proyectos
        ]);
    }

    public function ecommerce(){

        $proyectos = Proyecto::whereHas('servicio', function($query) {
            $query->where('nombre', 'like','%Tiendas Online%');
        })->where('publicado', true)->get();


        return view('servicios.ecommerce', [
            'titulo'=>'E-commerce de Alto Rendimiento',
            'meta_desc'=> 'Tiendas online diseñadas para vender, con carrito de compras y pagos online seguros.',
            'proyectos'=>$proyectos
        ]);
    }

    public function herramientas(){

        $proyectos = Proyecto::whereHas('servicio', function($query) {
            $query->where('nombre', 'like','%Sistemas a Medida%');
        })->where('publicado', true)->get();

        return view('servicios.herramientas', [
            'titulo'=>'Herramientas Digitales a Medida',
            'meta_desc'=> 'Sistemas especializados para médicos, abogados y profesionales que buscan eficiencia.',
            'proyectos'=>$proyectos
        ]);
    }

    public function restaurantes(){
            $proyectos = Proyecto::whereHas('servicio', function($query) {
            $query->where('nombre', 'like','%Menu Digital');
        })->where('publicado', true)->get();

        return view('servicios.restaurantes', [
            'titulo'=>'Soluciones para Restaurantes y Menus QR',
            'meta_desc'=> 'Digitaliza tu menú y optimiza la atención al cliente con tecnología QR.',
            'proyectos'=>$proyectos
        ]);
    }
}
