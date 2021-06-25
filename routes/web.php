<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacanteController;
use App\Http\Controllers\PruebaEstresController;

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

Route::get('/',[App\Http\Controllers\VacanteController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas de las vacantes

Route::get('/vacantes' ,[App\Http\Controllers\VacanteController::class, 'index'])->name('vacantes.index');
Route::get('/vacantes/create' ,[App\Http\Controllers\VacanteController::class, 'create'])->name('vacantes.create');
Route::post('/vacantes',[App\Http\Controllers\VacanteController::class, 'store'])->name('vacantes.store');
// Route::post('/vacantes', 'VacanteController@store')->name('vacantes.store');




    // Ruta especial para subir imagen provenientes de dropzone
Route::post('/vacantes/imagen',[App\Http\Controllers\VacanteController::class, 'imagen'])->name('vacantes.imagen');
Route::post('/vacantes/borrarimagen',[App\Http\Controllers\VacanteController::class, 'borrarimagen'])->name('vacantes.borrarimagen');

// Prueba de estres
Route::get('/pruebaestres',[App\Http\Controllers\PruebaEstresController::class, 'index'])->name('pruebaestres');


Route::get('/pruebaestres_ava',[App\Http\Controllers\PruebaEstresController::class, 'prueba_ava'])->name('pruebaestresava');
