<?php

namespace App\Http\Controllers\User;

use App\Models\Portada;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortadaController extends Controller
{
    public function portadainicio()
    {
        $portada = Portada::select('imagen')
        ->where("ubicacion", "Inicio")
        ->get();

        return response()->json([$portada, 'message' => 'Listado Portada'], 200);
    }

    public function portadaregistro()
    {
        $portada = Portada::select('imagen')
        ->where("ubicacion", "Registro")
        ->get();

        return response()->json([$portada, 'message' => 'Listado Portada'], 200);
    }
}