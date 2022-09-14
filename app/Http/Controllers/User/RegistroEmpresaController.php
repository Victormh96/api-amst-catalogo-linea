<?php

namespace App\Http\Controllers\User;

use App\Models\Cuenta;
use App\Models\Contacto;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RegistroEmpresaController extends Controller
{
    public function guardar(Request $request)
    { 
        // Transaccion
        DB::transaction(function () use ($request) {

        // Saving
        $registro = new Cuenta();
        $registro->nombre_cuenta = $request->name;
        $registro->slug = Str::slug($request->name).'-'.substr(md5(time()), 0, 4);
        $registro->documento = $request->document;
        $registro->email = $request->email;
        $registro->descripcion = $request->descripcionEmpresa;
        $registro->latitud = $request->latitud;
        $registro->longitud = $request->longitud;
        $registro->direccion = $request->direccion;
        $registro->horario = $request->horario;
        $registro->local = true;
        $registro->servicio_domicilio = $request->servicioDomicilio;      

        if($request->imagen):
            $ruta_imagen = $request['imagen']->store('cuenta','public');
            $registro->foto = $ruta_imagen;
        endif;

        $registro->save();

        // Facebook
        if($request->facebook):
            $contacto = new Contacto();
            $contacto->descripcion = $request->facebook;
            $contacto->id_detalle_contacto = 1;
            $contacto->id_cuenta = $registro->id;
            $contacto->save();
        endif;

        // Instagram
        if($request->instagram):
            $contacto = new Contacto();
            $contacto->descripcion = $request->instagram;
            $contacto->id_detalle_contacto = 2;
            $contacto->id_cuenta = $registro->id;
            $contacto->save();
        endif;

        // Twitter
        if($request->twitter):
            $contacto = new Contacto();
            $contacto->descripcion = $request->twitter;
            $contacto->id_detalle_contacto = 3;
            $contacto->id_cuenta = $registro->id;
            $contacto->save();
        endif;

        // Linkedin
        if($request->linkedin):
            $contacto = new Contacto();
            $contacto->descripcion = $request->linkedin;
            $contacto->id_detalle_contacto = 4;
            $contacto->id_cuenta = $registro->id;
            $contacto->save();
        endif;

        // Whatsapp
        if($request->whatsapp):
            $contacto = new Contacto();
            $contacto->descripcion = $request->whatsapp;
            $contacto->id_detalle_contacto = 5;
            $contacto->id_cuenta = $registro->id;
            $contacto->save();
        endif;

        // Web
        if($request->pagweb):
            $contacto = new Contacto();
            $contacto->descripcion = $request->pagweb;
            $contacto->id_detalle_contacto = 6;
            $contacto->id_cuenta = $registro->id;
            $contacto->save();
        endif;

        // Phone
        if($request->telefonoFijo):
            $contacto = new Contacto();
            $contacto->descripcion = $request->telefonoFijo;
            $contacto->id_detalle_contacto = 7;
            $contacto->id_cuenta = $registro->id;
            $contacto->save();
        endif;

        // Mobile
        if($request->telefonoCelular):
            $contacto = new Contacto();
            $contacto->descripcion = $request->telefonoCelular;
            $contacto->id_detalle_contacto = 8;
            $contacto->id_cuenta = $registro->id;
            $contacto->save();
        endif;

        // Saving
        $listaServicio = json_decode($request->servicios);

        foreach($listaServicio as $s){
            $servicio = new Servicio();
            $servicio->descripcion = $s->descripcion;
            $servicio->anios_experiencia = $s->experiencia;
            $servicio->id_rubro = $s->idServicio;
            $servicio->id_cuenta = $registro->id;
            $servicio->save();
        }

        return response()->json(['message' => 'Registro Guardado'], 200);
        });
    }
}