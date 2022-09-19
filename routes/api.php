<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\CuentaController;
use App\Http\Controllers\User\InicioController;
use App\Http\Controllers\User\PortadaController;
use App\Http\Controllers\User\CategoriaController;
use App\Http\Controllers\User\PublicidadController;
use App\Http\Controllers\User\RegistroEmpresaController;
use App\Http\Controllers\User\RegistroServicioController;

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

// Inicio
Route::post('/busqueda-fallida', [InicioController::class, 'fallido']);

// Portada
Route::get('/portada/{ubicacion}', [PortadaController::class, 'portada']);

// Publicidad
Route::get('/publicidad', [PublicidadController::class, 'publicidad']);
Route::post('/publicidad-click/{id}', [PublicidadController::class, 'publicidadclick']);

// Categorias
Route::get('/tag', [CategoriaController::class, 'tag']);
Route::get('/categoria/{slug}', [CategoriaController::class, 'categoria']);
Route::get('/categoria-registro/{slug}', [CategoriaController::class, 'categoriaregistro']);
Route::get('/categoria-destacado', [CategoriaController::class, 'categoriadestacado']);
Route::get('/categoria-click/{id}', [CategoriaController::class, 'categoriaclick']);

// Catalogo
Route::get('/catalogo/{slug}', [CuentaController::class, 'catalogocategoria']);

// Cuenta
Route::get('/cuenta/{slug}', [CuentaController::class, 'cuenta']);

// Registro
Route::post('/registro-servicio', [RegistroServicioController::class, 'guardar']);
Route::post('/registro-empresa', [RegistroEmpresaController::class, 'guardar']);