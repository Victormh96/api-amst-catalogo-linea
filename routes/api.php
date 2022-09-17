<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Portada
Route::get('/portada-inicio', [App\Http\Controllers\User\InicioController::class, 'portadainicio']);
Route::get('/portada-registro', [App\Http\Controllers\User\InicioController::class, 'portadaregistro']);
Route::get('/portada-nosotros', [App\Http\Controllers\User\InicioController::class, 'portadanosotros']);
Route::post('/busqueda-fallida', [App\Http\Controllers\User\InicioController::class, 'fallido']);

// Publicidad
Route::get('/publicidad', [App\Http\Controllers\User\PublicidadController::class, 'publicidad']);
Route::post('/publicidad-click/{id}', [App\Http\Controllers\User\PublicidadController::class, 'publicidadclick']);

// Categorias
Route::get('/tag', [App\Http\Controllers\User\CategoriaController::class, 'tag']);
Route::get('/categoria/{slug}', [App\Http\Controllers\User\CategoriaController::class, 'categoria']);
Route::get('/categoria-llena/{slug}', [App\Http\Controllers\User\CategoriaController::class, 'categoriallena']);
Route::get('/categoria-destacado', [App\Http\Controllers\User\CategoriaController::class, 'categoriadestacado']);
Route::post('/categoria-click/{id}', [App\Http\Controllers\User\CategoriaController::class, 'categoriaclick']);

// Catalogo
Route::get('/catalogo/{slug}', [App\Http\Controllers\User\CuentaController::class, 'catalogocategoria']);

// Cuenta
Route::get('/cuenta/{slug}', [App\Http\Controllers\User\CuentaController::class, 'cuenta']);

// Registro
Route::post('/registro-servicio', [App\Http\Controllers\User\RegistroServicioController::class, 'guardar']);
Route::post('/registro-empresa', [App\Http\Controllers\User\RegistroEmpresaController::class, 'guardar']);