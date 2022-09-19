<?php

namespace App\Http\Controllers\User;

use App\Models\Publicidad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PublicidadController extends Controller
{
    public function publicidad()
    {
        $publicidad = DB::select(DB::raw("exec SP_OBTENER_PUBLICIDAD"));
        return response()->json([$publicidad, 'message' => 'Listado Publicidad'], 200);
    }

    public function publicidadclick($id)
    {
        DB::statement(DB::raw("exec SP_AUMENTAR_CLICK_PUBLICIDAD :id"),[
            ':id' => $id,
        ]);
        return response()->json(['message' => 'Ok'], 200);
    }
}