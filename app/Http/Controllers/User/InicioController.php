<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\BusquedaFallida;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class InicioController extends Controller
{
    public function fallido(Request $request)
    { 
        // Transaccion
        DB::transaction(function () use ($request) {
            if($request->busqueda):
                $busqueda = new BusquedaFallida();
                $busqueda->busqueda = $request->busqueda;
                $busqueda->save();
            endif;

        return response()->json(['message' => 'busqueda Fallida'], 200);
        });
    }
}