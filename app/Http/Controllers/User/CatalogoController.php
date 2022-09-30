<?php

namespace App\Http\Controllers\User;

use App\Models\Cuenta;
use App\Models\Servicio;
use App\Models\Concepto;
use App\Models\DetalleConcepto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatalogoController extends Controller
{
    public function catalogocategoria($slug)
    {
        try {

            $servicio = Servicio::
            whereHas('rubro', function ($query) use ($slug) {
                return $query->where('slug', $slug);
            })->get();
        
            $cuenta = Cuenta::where('estado', true)
            ->whereIn('id', $servicio->pluck('id_cuenta'))
            ->with(['servicio.rubro'])
            ->with('contacto', function ($query) {
                $query->where('id_detalle_contacto', 5)
                ->orWhere('id_detalle_contacto', 7);
            })
            ->orderBy('verificado', 'desc')
            ->inRandomOrder()
            ->get();       

            return response()->json([$cuenta, 'message' => 'Listado Catalogo'], 200);
        
        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }
    }

    public function catalogoconcepto($slug)
    {
        try {

            $concepto = Concepto::
            whereHas('detalleconcepto', function ($query) use ($slug) {
                return $query->where('slug', $slug);
            })->get();
        
            $detalleconcepto = DetalleConcepto::where('slug', $slug)
            ->get();

            $cuenta = Cuenta::where('estado', true)
            ->whereIn('id', $concepto->pluck('id_cuenta'))
            ->with(['servicio.rubro'])
            ->with('concepto', function ($query) use ($concepto) {
                $query->where('id_detalle_concepto', $concepto->pluck('id_detalle_concepto'));
            })
            ->orderBy('verificado', 'desc')
            ->inRandomOrder()
            ->get();       

            return response()->json([$cuenta, $detalleconcepto ,'message' => 'Listado Catalogo'], 200);
                
        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }
    }
}