<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/form', 'App\Http\Controllers\PermisosController@index'); //Mostrar los Permisos
Route::post('/permisos', 'App\Http\Controllers\PermisosController@store'); //Crear Permiso
Route::delete('/permisos/{id}', 'App\Http\Controllers\PermisosController@destroy'); //Eliminar Permiso
