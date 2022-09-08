<?php

namespace App\Http\Controllers\User;

use App\Models\Rubro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{
    public function categoria($slug)
    {
        $rubro = Rubro::where('estado', True)
        ->whereRelation('categoria', 'slug', $slug)
        ->orderBy('nombre_rubro', 'ASC')
        ->get();

        return response()->json([$rubro, 'message' => 'Listado Rubro'], 200);
    }

    public function tag()
    {
        $rubro = Rubro::where('estado', True)
        ->orderBy('nombre_rubro', 'ASC')
        ->get();
        
        return response()->json([$rubro, 'message' => 'Listado Rubro'], 200);
    }

    public function categoriadestacado()
    {
        $profesional = Rubro::where('estado', True)
        ->where('id_categoria', 1)
        ->orderBy('click', 'DESC')
        ->limit(6)
        ->get();

        $empresa = Rubro::where('estado', True)
        ->where('id_categoria', 2)
        ->orderBy('click', 'DESC')
        ->limit(6)
        ->get();

        return response()->json([$profesional, $empresa, 'message' => 'Listado Rubro Destacado'], 200);
    }

    public function categoriaclick($id)
    {
        $rubro = Rubro::find($id)->increment('click');

        return response()->json(['message' => 'Se sumo con exito'],200);
    }
}