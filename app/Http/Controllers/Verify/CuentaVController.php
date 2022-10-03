<?php

namespace App\Http\Controllers\Verify;

use App\Models\Cuenta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CuentaVController extends Controller
{
    public function estadocuenta($estado)
    {
        try {

            $cuentas = DB::select(DB::raw("exec SP_OBTENER_NOMBRE_CUENTA :estado"), [
                ':estado' => $estado
            ]);
        
            return response()->json([$cuentas, 'message' => 'Listado Estado Cuentas'], 200);
                        
        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }
    }
}