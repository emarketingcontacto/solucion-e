<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Web Routes
Route::get('/', WelcomeController::class)->name('home');
Route::get('/seo-local', [ServiceController::class, 'seoLocal'])->name('servicios.seo');
Route::get('/tiendas-web-ecommerce', [ServiceController::class, 'ecommerce'])->name('servicios.ecommerce');
Route::get('/herramientas-digitales-especializadas', [ServiceController::class, 'herramientas'])->name('servicios.herramientas');
Route::get('/soluciones-web-restaurantes', [ServiceController::class, 'restaurantes'])->name('servicios.restaurantes');

//Proyectos
Route::get('/proyectos/{slug}', ProyectosController::class)->name('proyectos');

//Privacidad
Route::get('/privacidad', function(){
    return view('privacidad');
})->name('privacidad');

//Terminos
Route::get('/terminos', function(){
    return view('terminos');
})->name('terminos');

//Contacto
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');

//Mail Routes
Route::post('/contacto-enviar', [ContactoController::class, 'enviar'])->name('contacto.enviar');


// Filament Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Authorization Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/sitemap.xml',SitemapController::class);

require __DIR__.'/auth.php';
