<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacanteController;
use App\Http\Controllers\PruebaEstresController;
use App\Http\Controllers\NotificacionesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes(['verify' => true]);

Route::get('/',[App\Http\Controllers\InicioController::class, 'index']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Rutas protegidas

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('/vacantes' ,[App\Http\Controllers\VacanteController::class, 'index'])->name('vacantes.index');
    Route::get('/vacantes/create' ,[App\Http\Controllers\VacanteController::class, 'create'])->name('vacantes.create');
    Route::post('/vacantes',[App\Http\Controllers\VacanteController::class, 'store'])->name('vacantes.store');
    Route::delete('/vacantes/{vacante}',[App\Http\Controllers\VacanteController::class, 'destroy'])->name('vacantes.delete');
    Route::get('/vacantes/{vacante}/edit',[App\Http\Controllers\VacanteController::class, 'edit'])->name('vacantes.edit');
    Route::put('/vacantes/{vacante}',[App\Http\Controllers\VacanteController::class, 'update'])->name('vacantes.update');

    // Ruta especial para subir imagen provenientes de dropzone
    Route::post('/vacantes/imagen',[App\Http\Controllers\VacanteController::class, 'imagen'])->name('vacantes.imagen');
    Route::post('/vacantes/borrarimagen',[App\Http\Controllers\VacanteController::class, 'borrarimagen'])->name('vacantes.borrarimagen');

    //Notificaciones 
    Route::get('/notificaciones' ,[App\Http\Controllers\NotificacionesController::class, 'index'])->name('notificaciones');


    Route::post('/vacantes/cambiarestado/{vacante}', [App\Http\Controllers\VacanteController::class, 'cambiarEstadoVacante'])->name('cambiarEstadoVacante');
});

//Categorias 
Route::get('/categoria/{categoria}',[App\Http\Controllers\CategoriaController::class, 'show'])->name('categorias.show');

// Mostramos los candidatos a determinada vacante
Route::get('/candidatos/{vacante}', [App\Http\Controllers\CandidatoController::class, 'index'])->name('candidatos.index');


// Rutas de las vacantes que no necesitan autenticado y verificado
// Buscador de vacantes del index(inicio)
Route::get('/busqueda/resultados', [App\Http\Controllers\VacanteController::class, 'resultados'])->name('busqueda.resultado');
Route::post('/busqueda', [App\Http\Controllers\VacanteController::class, 'buscar'])->name('vacantes.buscar');
Route::get('/vacantes/{vacante}', [App\Http\Controllers\VacanteController::class, 'show'])->name('vacantes.show');
// Deben de estar en este orden debido a que sino las rutas para buscar van a retornar 404

Route::post('/candidatos/store', [App\Http\Controllers\CandidatoController::class, 'store'])->name('candidatos.store');




// Prueba de estres
Route::get('/pruebaestres',[App\Http\Controllers\PruebaEstresController::class, 'index'])->name('pruebaestres');
Route::get('/pruebaestres_ava',[App\Http\Controllers\PruebaEstresController::class, 'prueba_ava'])->name('pruebaestresava');
