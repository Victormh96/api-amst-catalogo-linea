<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// User
use App\Http\Controllers\User\CuentaController;
use App\Http\Controllers\User\InicioController;
use App\Http\Controllers\User\PortadaController;
use App\Http\Controllers\User\EntidadController;
use App\Http\Controllers\User\CatalogoController;
use App\Http\Controllers\User\CategoriaController;
use App\Http\Controllers\User\PublicidadController;
use App\Http\Controllers\User\RegistroEmpresaController;
use App\Http\Controllers\User\RegistroServicioController;

// Verify

use App\Http\Controllers\Verify\ConceptoController;
use App\Http\Controllers\Verify\CuentaVController;


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
Route::get('/busqueda-fallida/{busqueda}', [InicioController::class, 'fallido']);

// Portada
Route::get('/portada/{ubicacion}', [PortadaController::class, 'portada']);

// Publicidad
Route::get('/publicidad', [PublicidadController::class, 'publicidad']);
Route::get('/publicidad-click/{id}', [PublicidadController::class, 'publicidadclick']);

// Categorias
Route::get('/tag', [CategoriaController::class, 'tag']);
Route::get('/categoria/{slug}', [CategoriaController::class, 'categoria']);
Route::get('/categoria-registro/{id}', [CategoriaController::class, 'categoriaregistro']);
Route::get('/categoria-destacado', [CategoriaController::class, 'categoriadestacado']);
Route::get('/categoria-concepto/{id}', [CategoriaController::class, 'categoriaconcepto']);
Route::get('/categoria-click/{id}', [CategoriaController::class, 'categoriaclick']);

// Catalogo
Route::get('/catalogo/{slug}', [CatalogoController::class, 'catalogocategoria']);
Route::get('/catalogo-concepto/{slug}', [CatalogoController::class, 'catalogoconcepto']);

// Cuenta
Route::get('/cuenta/{slug}', [CuentaController::class, 'cuenta']);
Route::get('/nombre-cuenta/{estado}', [CuentaController::class, 'nombrecuenta']);

//Concepto
Route::get('/concepto', [ConceptoController::class, 'conceptos']);
Route::post('/registro-concepto', [ConceptoController::class, 'guardar']);

// Entidad
Route::get('/entidad', [EntidadController::class, 'entidad']);

// Registro
Route::post('/registro-servicio', [RegistroServicioController::class, 'guardar']);
Route::post('/registro-empresa', [RegistroEmpresaController::class, 'guardar']);