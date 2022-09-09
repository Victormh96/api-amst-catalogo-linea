<?php

namespace App\Http\Controllers\User;

use App\Models\Cuenta;
use App\Models\Contacto;
use App\Models\Servicio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class RegistroServicioController extends Controller
{
    public function guardar(Request $request)
    { 
        //Transaccion
        DB::transaction(function () use ($request) {

        //Guardando
        $registro = new Cuenta();
        $registro->nombre_cuenta = $request->name.' '.$request->lastName;
        $registro->fecha_nacimiento = $request->fechaNacimiento;
        $registro->documento = $request->dui;
        $registro->email = $request->email;
        $registro->descripcion = $request->descripcion;
        $registro->latitud = $request->latitud;
        $registro->longitud = $request->longitud;
        $registro->direccion = $request->direccion;
        $registro->local = $request->local;
        $registro->servicio_domicilio = $request->servicioDomicilio;
        $registro->slug = Str::slug($request->name).'-'.substr(md5(time()), 0, 4);
        $registro->id_genero = $request->genero;

        //Imagen
        if($request->imagen):
            $ruta_imagen = $request['imagen']->store('cuenta','public');
            $registro->foto = $ruta_imagen;
        endif;
        $registro->save();

        //telefono
        if($request->telefono):
            $contacto = new Contacto();
            $contacto->descripcion = $request->telefono;
            $contacto->id_detalle_contacto = 7;
            $contacto->id_cuenta = $registro->id;
            $contacto->save();
        endif;

        //Facebook
        if($request->facebook):
            $contacto = new Contacto();
            $contacto->descripcion = $request->facebook;
            $contacto->id_detalle_contacto = 1;
            $contacto->id_cuenta = $registro->id;
            $contacto->save();
        endif;
        //Instagran
        if($request->instagram):
            $contacto = new Contacto();
            $contacto->descripcion = $request->instagram;
            $contacto->id_detalle_contacto = 2;
            $contacto->id_cuenta = $registro->id;
            $contacto->save();
        endif;
        //Twitter
        if($request->twitter):
            $contacto = new Contacto();
            $contacto->descripcion = $request->twitter;
            $contacto->id_detalle_contacto = 3;
            $contacto->id_cuenta = $registro->id;
            $contacto->save();
        endif;
        //Linkedin
        if($request->linkedin):
            $contacto = new Contacto();
            $contacto->descripcion = $request->linkedin;
            $contacto->id_detalle_contacto = 4;
            $contacto->id_cuenta = $registro->id;
            $contacto->save();
        endif;
        //WhatsApp
        if($request->whatsapp):
            $contacto = new Contacto();
            $contacto->descripcion = $request->whatsapp;
            $contacto->id_detalle_contacto = 5;
            $contacto->id_cuenta = $registro->id;
            $contacto->save();
        endif;
        //Pag-Web
        if($request->pagweb):
            $contacto = new Contacto();
            $contacto->descripcion = $request->pagweb;
            $contacto->id_detalle_contacto = 6;
            $contacto->id_cuenta = $registro->id;
            $contacto->save();
        endif;

        $listaServicio = json_decode($request->servicios);
        foreach( $listaServicio as $serv){
            $servicio = new Servicio();
            $servicio->descripcion = $serv->descripcion;
            $servicio->anios_experiencia = $serv->experiencia;
            $servicio->id_rubro = $serv->idServicio;
            $servicio->id_cuenta = $registro->id;
            $servicio->save();
        }

        return response()->json(['message' => 'Registro Guardado'], 200);
    });
    }
}