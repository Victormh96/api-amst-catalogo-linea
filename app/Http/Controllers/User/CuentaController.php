<?php

namespace App\Http\Controllers\User;

use App\Models\Rubro;
use App\Models\Cuenta;
use App\Models\Servicio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CuentaController extends Controller
{
    public function catalogocategoria($slug)
    {
        $servicio = Servicio::
        whereHas('rubro', function ($query) use ($slug) {
            return $query->where('slug', $slug);
        })->get();
        
        $cuenta = Cuenta::where('estado', true)
        ->whereIn('id', $servicio->pluck('id_cuenta'))
        ->with(['genero', 'servicio.rubro'])
        ->with('contacto', function ($query) {
            $query->where('id_detalle_contacto', 5);
        })->orderBy('verificado', 'desc')
        ->inRandomOrder()
        ->get();       

        return response()->json([$cuenta, 'message' => 'Listado Catalogo'], 200);
    }

    public function cuenta($slug)
    {
        $cuenta = Cuenta::where('estado', true)
        ->where('slug', $slug)
        ->with(['genero', 'contacto.detallecontacto', 'galeria', 'servicio.rubro'])
        ->first();

        return response()->json([$cuenta, 'message' => 'Listado Cuenta'], 200);
    }
}