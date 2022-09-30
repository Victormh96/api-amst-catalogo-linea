<?php

namespace App\Http\Controllers\User;

use App\Models\Cuenta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CuentaController extends Controller
{
    public function cuenta($slug)
    {
        try {

            $cuenta = Cuenta::where('estado', true)
            ->where('slug', $slug)
            ->with(['genero', 'contacto.detallecontacto', 'galeria', 'servicio.rubro'])
            ->first();

            return response()->json([$cuenta,  'message' => 'Listado Cuenta'], 200);
                        
        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }
    }
}