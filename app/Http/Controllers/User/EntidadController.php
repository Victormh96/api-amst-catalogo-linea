<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EntidadController extends Controller
{
    public function entidad()
    {
        try {

            $entidad = DB::select(DB::raw("exec SP_OBTENER_ENTIDADES"));  

            return response()->json([$entidad, 'message' => 'Entidades'], 200);
                
        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }
    }
}