<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
//use Spatie\Sitemap\SitemapGenerator;

// Web Routes
Route::get('/', WelcomeController::class)->name('home');

//Servicios
Route::get('/seo-local', [ServiceController::class, 'seoLocal'])->name('servicios.seo');
Route::get('/sitios-web-profesionales',[ServiceController::class, 'sitiosWeb'])->name('servicios.sitiosweb');
Route::get('/tiendas-web-ecommerce', [ServiceController::class, 'ecommerce'])->name('servicios.ecommerce');
Route::get('/plataformas-web-especializadas', [ServiceController::class, 'plataformasWeb'])->name('servicios.plataformasweb');
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

// Migraciones
Route::get('ejecutar-migraciones', function (){
    try {
        Artisan::call('migrate', ['--force'=>true]);
        return 'Migrations Exito: <br><pre>' .Artisan::output() .'</pre>';
    } catch (\Exception $e) {
        return 'Error en migrations'. $e->getMessage();
    }
});
// Limpiar cache
Route::get('/limpiar-cache', function () {
    // Limpia la caché de plantillas Blade compilaras
    Artisan::call('view:clear');

    // Opcional: Limpia la caché general de la aplicación y de rutas
    Artisan::call('cache:clear');
    Artisan::call('route:clear');

    return '¡Caché de Blade y aplicación limpiada con éxito!';
});

//Crear sitemap
Route::get('/generar-sitemap', function () {
    try {
        Artisan::call('sitemap:generate');
        return 'Sitemap generado correctamente en public/sitemap.xml';
    } catch (\Exception $e) {
        return 'Error al generar sitemap: ' . $e->getMessage();
    }
});

require __DIR__.'/auth.php';
