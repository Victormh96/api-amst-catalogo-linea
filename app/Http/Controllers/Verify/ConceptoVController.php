<?php

namespace App\Http\Controllers\Verify;

use App\Models\Concepto;
use Illuminate\Http\Request;
use App\Models\DetalleConcepto;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ConceptoVController extends Controller
{
    public function concepto()
    {
        try {

            $conceptos = DB::select(DB::raw("exec SP_OBTENER_CONCEPTOS"));

            return response()->json([$conceptos, 'message' => 'Listado Conceptos'], 200);
        
        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }
    }

    public function guardar(Request $request)
    {
        try {

            // Validation 
            $data = Validator::make($request->all(), [
                'idConcepto' => 'unique:concepto,id_detalle_concepto,NULL,id,id_cuenta,'.request('cuenta')
            ]);

            if ($data->fails()):
                return response()->json([$data->errors(), 'message' => 'Registro No Guardado'], 400);
            endif;

            // Transaccion
            DB::transaction(function () use ($request) { 

                // Saving
                $registro = new Concepto();
                $registro->latitud= $request->latitud;
                $registro->longitud =$request->longitud;
                $registro->id_detalle_concepto = $request->idConcepto;
                $registro->id_cuenta = $request->cuenta;
                $registro->save();

                return response()->json(['message' => 'Registro Guardado'], 200);
            });
        
        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }
    }
}