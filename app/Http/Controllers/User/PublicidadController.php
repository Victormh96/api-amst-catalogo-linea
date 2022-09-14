<?php

namespace App\Http\Controllers\User;

use App\Models\Publicidad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicidadController extends Controller
{
    public function publicidad()
    {
        $publicidad = Publicidad::select('id','imagen')
        ->get();

        return response()->json([$publicidad, 'message' => 'Listado Publicidad'], 200);
    }

    public function publicidadclick($id)
    {
        $click = Publicidad::find($id)
        ->increment('click');

        return response()->json(['message' => 'Ok'], 200);
    }
}