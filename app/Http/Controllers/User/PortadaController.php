<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PortadaController extends Controller
{
    public function portada($ubicacion)
    {
        $portada = DB::select(DB::raw("exec SP_OBTENER_PORTADAS :Param1"),[
            ':Param1' => $ubicacion,
        ]);
        
        return response()->json([$portada, 'message' => 'Listado Portada'], 200);
    }
}