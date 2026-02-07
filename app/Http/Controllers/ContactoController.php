<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoRecibido;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{

    public function index(Request $request){
        $titulo="Contacto Solucion-e";
        $meta_desc="Inicia tu transformación digital con Solucion-e. Expertos en software a medida, E-commerce y SEO local.";
        return view('contacto', compact('titulo', 'meta_desc'));
    }


    public function enviar(Request $request){
        //Validation
        $data = $request->validate([
            'nombre' => 'required|string|max:100',
            'proyecto' => 'required',
            'mensaje' => 'required|min:10'
        ]);

        try {
             //Envio
            Mail::to('webmaster@solucion-e.com.mx')->send(new ContactoRecibido($data));
            //Redirect Success
            return back()->with('success', 'Mensaje Enviado! Nos pondremos en contacto pronto.');
        } catch (\Exception $e) {
            return back()->withErrors(['msg'=>$e->getMessage()]);
        }
    }
}
