<?php

namespace App\Http\Controllers\Verify;

use App\Models\DetalleConcepto;
use App\Models\Concepto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ConceptoController extends Controller
{
    public function conceptos()
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

        //Validando 
        $data = Validator::make($request->all(), [
        'id_detalle_concepto' => 'unique:concepto,id_detalle_concepto,NULL,id,id_cuenta,'.request('id_cuenta')
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
                $registro->id_detalle_concepto = $request->id_detalle_concepto;
                $registro->id_cuenta = $request->id_cuenta;
                $registro->save();

                return response()->json(['message' => 'Registro Guardado'], 200);
            });
        
        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }
    }

}