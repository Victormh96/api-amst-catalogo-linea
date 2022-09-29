<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{
    public function tag()
    {
        try {

            $tag = DB::select(DB::raw("exec SP_OBTENER_RUBROS"));  

            return response()->json([$tag, 'message' => 'Listado Tag'], 200);

        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }
    }

    public function categoria($slug)
    {
        try {

            $rubro = DB::select(DB::raw("exec SP_OBTENER_RUBROS_POR_CATEGORIA :slug"), [
                ':slug' => $slug
            ]);

            return response()->json([$rubro, 'message' => 'Listado Categoria'], 200);

        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }
    }

    public function categoriaregistro($id_categoria)
    {
        try {

            $rubro = DB::select(DB::raw("exec SP_OBTENER_RUBROS_PARA_REGISTRARSE :id_categoria"), [
                ':id_categoria' => $id_categoria
            ]);

            return response()->json([$rubro, 'message' => 'Listado Categoria'], 200);

        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }       
    }

    public function categoriadestacado()
    {
        try {

            $destacados = DB::select(DB::raw("exec SP_OBTENER_RUBROS_DESTACADOS"));

            return response()->json([$destacados, 'message' => 'Listado Destacado'], 200);

        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }   
    }

    public function categoriaconcepto($slug)
    {
        try {

            $concepto = DB::select(DB::raw("exec SP_OBTENER_RUBROS_CONCEPTO :id_concepto"), [
                ':id_concepto' => $slug
            ]);

            return response()->json([$concepto, 'message' => 'Listado Destacado'], 200);

        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }   
    }

    public function categoriaclick($id)
    {
        try {

            DB::statement(DB::raw("exec SP_AUMENTAR_CLICK_RUBRO :id"), [
                ':id' => $id
            ]);

            return response()->json(['message' => 'Ok'], 200);
        
        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }   
    }
}