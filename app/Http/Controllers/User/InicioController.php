<?php

namespace App\Http\Controllers\User;
use App\Models\Portada;
use Illuminate\Http\Request;
use App\Models\BusquedaFallida;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class InicioController extends Controller
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

    public function portadanosotros()
    {
        $portada = Portada::select('imagen')
        ->where("ubicacion", "Nosotros")
        ->get();
        return response()->json([$portada, 'message' => 'Listado Portada'], 200);
    }


    public function fallido(Request $request)
    { 
        // Transaccion
        DB::transaction(function () use ($request) {
            if($request->busqueda):
                $busqueda = new BusquedaFallida();
                $busqueda->busqueda = $request->busqueda;
                $busqueda->save();
            endif;

        return response()->json(['message' => 'busqueda Guardada'], 200);
        });
    }
}