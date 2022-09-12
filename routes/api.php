<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Portada
Route::get('/portada-inicio', [App\Http\Controllers\User\PortadaController::class, 'portadainicio']);
Route::get('/portada-registro', [App\Http\Controllers\User\PortadaController::class, 'portadaregistro']);

//Categorias
Route::get('/tag', [App\Http\Controllers\User\CategoriaController::class, 'tag']);
Route::get('/categoria/{slug}', [App\Http\Controllers\User\CategoriaController::class, 'categoria']);
Route::get('/categoria-destacado', [App\Http\Controllers\User\CategoriaController::class, 'categoriadestacado']);
Route::post('/categoria-click/{id}', [App\Http\Controllers\User\CategoriaController::class, 'categoriaclick']);

//catalogo
Route::get('/catalogo/{slug}', [App\Http\Controllers\User\CuentaController::class, 'catalogocategoria']);

//cuenta
Route::get('/cuenta/{slug}', [App\Http\Controllers\User\CuentaController::class, 'cuenta']);

//registro
Route::post('/registro-servicio', [App\Http\Controllers\User\RegistroServicioController::class, 'guardar']);
Route::post('/registro-empresa', [App\Http\Controllers\User\RegistroEmpresaController::class, 'guardar']);


Route::post('/busqueda-fallida', [App\Http\Controllers\User\BusquedaFallidaController::class, 'fallido']);