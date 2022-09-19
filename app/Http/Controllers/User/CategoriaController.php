<?php

namespace App\Http\Controllers\User;

use App\Models\Rubro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function tag()
    {
        $tag = DB::select(DB::raw("exec SP_OBTENER_RUBROS"));      
        return response()->json([$tag, 'message' => 'Listado Tag'], 200);
    }

    public function categoria($slug)
    {
        $rubro = DB::select(DB::raw("exec SP_OBTENER_RUBROS_POR_CATEGORIA :slug"),[
            ':slug' => $slug,
        ]);
        return response()->json([$rubro, 'message' => 'Listado Categoria'], 200);
    }

    public function categoriaregistro($id_categoria)
    {
        $rubro = DB::select(DB::raw("exec SP_OBTENER_RUBROS_PARA_REGISTRARSE :id_categoria"),[
            ':id_categoria' => $id_categoria,
        ]);
        return response()->json([$rubro, 'message' => 'Listado Categoria'], 200);
    }

    public function categoriadestacado()
    {
        $destacados = DB::select(DB::raw("exec SP_OBTENER_RUBROS_DESTACADOS"));
        return response()->json([$destacados, 'message' => 'Listado Destacado'], 200);
    }

    public function categoriaclick($id)
    {
        DB::select(DB::raw("exec SP_AUMENTAR_CLICK_RUBRO :id"),[
            ':id' => $id,
        ]);
        return response()->json(['message' => 'Ok'], 200);
    }
}