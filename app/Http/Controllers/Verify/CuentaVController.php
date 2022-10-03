<?php

namespace App\Http\Controllers\Verify;

use App\Models\Cuenta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CuentaVController extends Controller
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

    public function nombrecuenta($estado)
    {
        try {

            $cuentas = DB::select(DB::raw("exec SP_OBTENER_NOMBRE_CUENTA :estado"), [
                ':estado' => $estado
            ]);
        
            return response()->json([$cuentas, 'message' => 'Listado Cuentas'], 200);
                        
        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }
    }
}