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
        
        $cuenta = Cuenta::whereIn('id', $servicio->pluck('id_cuenta'))
        ->with(['genero', 'servicio.rubro'])
        ->with('contacto', function ($query) {
            $query->where('id', 6);
       })
        ->get();       

        return response()->json([$cuenta, 'message' => 'Listado Cuenta'], 200);
    }

    public function cuenta($slug)
    {
    }
}