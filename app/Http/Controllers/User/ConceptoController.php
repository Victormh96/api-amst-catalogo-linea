<?php

namespace App\Http\Controllers\User;

use App\Models\Concepto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ConceptoController extends Controller
{
    public function concepto()
    {
        try {

            $concepto = DB::select(DB::raw("exec SP_OBTENER_CONCEPTOS"));

            return response()->json([$conceptos, 'message' => 'Listado Conceptos'], 200);
        
        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }
    }
}