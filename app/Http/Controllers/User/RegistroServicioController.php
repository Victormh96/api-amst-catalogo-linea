<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Cuenta;
use App\Models\Contacto;
use App\Models\Servicio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RegistroServicioController extends Controller
{
    public function guardar(Request $request)
    { 
        // Transaccion
        DB::transaction(function () use ($request) {

        // Saving
        $registro = new Cuenta();
        $registro->nombre_cuenta = $request->name.' '.$request->lastName;
        $registro->slug = Str::slug($request->name.'-'.$request->lastName).'-'.substr(md5(time()), 0, 4);
        $registro->fecha_nacimiento = $request->fechaNacimiento;
        $registro->documento = $request->documento;
        $registro->email = $request->email;
        $registro->descripcion = $request->descripcion;
        $registro->id_genero = $request->genero;
        $registro->local = $request->local;
        $registro->servicio_domicilio = $request->servicioDomicilio;
 
        if($request->local):
            $registro->latitud = $request->latitud;
            $registro->longitud = $request->longitud;
            $registro->direccion = $request->direccion;
        endif;

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

        // Mobile
        if($request->telefono):
            $contacto->descripcion = $request->telefono;
            $contacto->id_detalle_contacto = 7;
            $contacto->id_cuenta = $registro->id;
        endif;

        // Saving
        $listaServicio = json_decode($request->servicios);
        
        foreach($listaServicio as $s):
            $servicio = new Servicio();
            $servicio->descripcion = $s->descripcion;
            $servicio->anios_experiencia = $s->experiencia;
            $servicio->id_rubro = $s->idServicio;
            $servicio->id_cuenta = $registro->id;
            $servicio->save();
        endforeach;

        // Saving
        $usuario = new User();
        $usuario->nombre = $registro->nombre_cuenta;
        $usuario->slug = $registro->slug;
        $usuario->email = $registro->email;
        $usuario->password = bcrypt($registro->documento);
        $usuario->estado = false;
        $usuario->id_rol = 3;
        $usuario->id_cuenta = $registro->id;
        $usuario->save();

        return response()->json(['message' => 'Registro Guardado'], 200);
        });
    }
}