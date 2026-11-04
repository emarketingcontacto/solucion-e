<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
//use Illuminate\Http\Request;

class ServiceController extends Controller
{

    //SEO Local
    public function seoLocal(){
        $proyectos = Proyecto::whereHas('servicio', function($query) {
            $query->where('slug','seo-local');
        })->where('publicado', true)->get();

        return view('servicios.seo-local', [
            'titulo'=>'SEO Local en León | Mejora tu visibilidad en Google',
            'meta_desc'=> 'Mejora la presencia de tu negocio en Google Maps y búsquedas locales con SEO Local para atraer clientes que buscan tus productos o servicios en León.',
            'proyectos'=>$proyectos
        ]);
    }

    //Sitios Web
    public function sitiosWeb(){
        $proyectos = Proyecto::whereHas('servicio', function($query){
            $query->where('slug','sitios-web-profesionales');
        })->where('publicado', true)->get();

        return view('servicios.sitioswebprofesionales', [
            'titulo'=>'Diseño de Páginas Web en León | Sitios Web Profesionales',
            'meta_desc'=>'Diseño de páginas web en León para negocios y PyMEs. Creamos sitios web profesionales orientados a generar oportunidades y medir resultados.',
            'proyectos'=>$proyectos
        ]);
    }

    public function plataformasWeb(){

        $proyectos = Proyecto::whereHas('servicio', function($query) {
            $query->where('slug','plataformas-web-especializadas');
        })->where('publicado', true)->get();

        return view('servicios.plataformasweb', [
            'titulo'=>'Plataformas Web Especializadas en León | Solucion-e',
            'meta_desc'=> 'Desarrollamos plataformas web especializadas en León para organizar información, digitalizar procesos y mejorar el control de la operación de tu negocio.',
            'proyectos'=>$proyectos
        ]);
    }

    public function restaurantes(){
            $proyectos = Proyecto::whereHas('servicio', function($query) {
            $query->where('slug','soluciones-web-restaurantes');
        })->where('publicado', true)->get();

        return view('servicios.restaurantes', [
            'titulo' => 'Soluciones Web para Restaurantes en León | Menú Digital',
            'meta_desc' => 'Soluciones web para restaurantes en León con menú digital administrable, códigos QR y herramientas para mejorar su presencia y medir resultados.',
            'proyectos'=>$proyectos
        ]);
    }
}
