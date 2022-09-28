<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Cuenta;
use App\Models\Contacto;
use App\Models\Servicio;
use App\Models\Documento;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Validator;

class RegistroEmpresaController extends Controller
{
    public function guardar(Request $request)
    { 
        try {

            // Validation
            $data = Validator::make($request->all(), [
                'email' => 'unique:cuenta',
                'documento' => 'unique:cuenta' 
            ]);

            if ($data->fails()):
                return response()->json([$data->errors(), 'message' => 'Registro No Guardado'], 400);
            endif;

            // Transaccion
            DB::transaction(function () use ($request) {

                // Saving
                $registro = new Cuenta();
                $registro->nombre_cuenta = $request->name;
                $registro->slug = Str::slug($request->name).'-'.substr(md5(time()), 0, 4);
                $registro->documento = $request->documento;
                $registro->email = $request->email;
                $registro->descripcion = $request->descripcion;
                $registro->fecha_nacimiento = $request->fechaNacimiento;
                $registro->id_entidad  = $request->entidad;
                $registro->latitud = $request->latitud;
                $registro->longitud = $request->longitud;
                $registro->direccion = $request->direccion;
                $registro->representante = $request->representante;
                $registro->horario = $request->horario;
                $registro->local = true;
                $registro->servicio_domicilio = $request->servicioDomicilio;
                $registro->tags = $request->tags;

                if($request->logo):
                    $ruta_logo = $request['logo']->store('logo','public');
                    $registro->logo = $ruta_logo;
                endif;

                if($request->imagen):
                    $ruta_imagen = $request['imagen']->store('cuenta','public');
                    $registro->foto = $ruta_imagen;
                endif;

                $registro->save();

                // Documento
                if($request->doc1):
                    $documento = new Documento();
                    $ruta_doc1 = $request['doc1']->store('documentos','public');
                    $documento->imagen = $ruta_doc1;
                    $documento->id_cuenta = $registro->id;
                    $documento->save();
                endif;

                // Documento
                if($request->doc2):
                    $documento = new Documento();
                    $ruta_doc2 = $request['doc2']->store('documentos','public');
                    $documento->imagen = $ruta_doc2;
                    $documento->id_cuenta = $registro->id;
                    $documento->save();
                endif;

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

        } catch(\Exception $e) {

            return response()->json([$e], 400);
        }
    }
}