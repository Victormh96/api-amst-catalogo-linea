<?php

namespace App\Http\Controllers\User;

use App\Models\BusquedaFallida;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class InicioController extends Controller
{
    public function fallido($busqueda)
    { 
        // Transaccion
        DB::statement(DB::raw("exec SP_BUSQUEDA_FALLIDA :busqueda"),[
            ':busqueda' => $busqueda,
        ]);
        return response()->json(['message' => 'busqueda Fallida'], 200);
    }
}