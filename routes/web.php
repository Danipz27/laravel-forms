<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\PermisosController;
use App\Http\Controllers\ListadoController;

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

Route::get('/', function () {
    return view('Permiso');
});

Route::post('/',[PermisosController::class, 'store'])->name('create.permiso');

Route::get('/intranet', [PermisosController::class, 'intranet'])->name('volver.inicio');

Route::get('/mostrar', function(){
    return view('Mostrar');
})->name('ir.mostrar');

Route::get('/', function(){
    return view('Permiso');
})->name('volver.permiso');

/*Route::get('/prueba', function(){
    return view('Prueba');
})->name('volver.prueba');*/

Route::get('Listado',[ListadoController::class, 'index'])->name('index.listado');

Route::get('Listado/{ci}',[ListadoController::class, 'show']);
