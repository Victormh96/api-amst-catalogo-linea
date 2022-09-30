<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RubroSeeder extends Seeder
{
    public function run()
    {
        //Servicios Profesionales
        DB::table('rubro')->insert([
            'nombre_rubro' => 'Mecánico',
            'slug' => Str::slug('mecanico'),
            'imagen' => ('rubro/mecanico.png'),
            'click' => 0,
            'tag' => 'Mecanico',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('rubro')->insert([
            'nombre_rubro' => 'Albañil',
            'slug' => Str::slug('albañil'),
            'imagen' => ('rubro/albañil.png'),
            'click' => 0,
            'tag' => 'Albanil, Constructor',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Fontanero',
            'slug' => Str::slug('fontanero'),
            'imagen' => ('rubro/fontanero.png'),
            'click' => 0,
            'tag' => 'Fontanero',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Medico',
            'slug' => Str::slug('medico'),
            'imagen' => ('rubro/medico.png'),
            'click' => 0,
            'tag' => 'Medico,Doctor,Doctora',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Niñera',
            'slug' => Str::slug('niñera'),
            'imagen' => ('rubro/niñera.png'),
            'click' => 0,
            'tag' => 'Niñera,Cuidadora,Nana',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Artesano',
            'slug' => Str::slug('artesano'),
            'imagen' => ('rubro/artesano.png'),
            'click' => 0,
            'tag' => 'Artesano',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Panadero',
            'slug' => Str::slug('panadero'),
            'imagen' => ('rubro/panadero.png'),
            'click' => 0,
            'tag' => 'Panadero,Panadera,Pastelera,Pastelero',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Peluquero',
            'slug' => Str::slug('peluquero'),
            'imagen' => ('rubro/peluquero.png'),
            'click' => 0,
            'tag' => 'Peluquero,Estilista',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Músico',
            'slug' => Str::slug('musico'),
            'imagen' => ('rubro/musico.png'),
            'click' => 0,
            'tag' => 'Musico,Cantante,Guitarrista',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Escritor',
            'slug' => Str::slug('escritor'),
            'imagen' => ('rubro/escritor.png'),
            'click' => 0,
            'tag' => 'Escritor,Novelista',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('rubro')->insert([
            'nombre_rubro' => 'Vigilante',
            'slug' => Str::slug('vigilante'),
            'imagen' => ('rubro/vigilante.png'),
            'click' => 0,
            'tag' => 'Vigilante,Cuidador',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('rubro')->insert([
            'nombre_rubro' => 'Soldador',
            'slug' => Str::slug('soldador'),
            'imagen' => ('rubro/soldador.png'),
            'click' => 0,
            'tag' => 'Soldador',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Rubros de Empresas
        DB::table('rubro')->insert([
            'nombre_rubro' => 'Chilateria',
            'slug' => Str::slug('chilateria'),
            'imagen' => ('rubro/chilateria.png'),
            'click' => 0,
            'tag' => 'chilateria,tipicos',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('rubro')->insert([
            'nombre_rubro' => 'Laboratorio',
            'slug' => Str::slug('laboratorio'),
            'imagen' => ('rubro/laboratorio.png'),
            'click' => 0,
            'tag' => 'laboratorio clinico,examen de sangre',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Hospitales',
            'slug' => Str::slug('hospitales'),
            'imagen' => ('rubro/hospitales.png'),
            'click' => 0,
            'tag' => 'hospitales,cirugias, clinicas, Dolor de cabeza',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Mecánica',
            'slug' => Str::slug('mecanica'),
            'imagen' => ('rubro/mecanica.png'),
            'click' => 0,
            'tag' => 'Mecánica Automotriz,Taller Electrico,Talleres',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Farmacias',
            'slug' => Str::slug('farmacias'),
            'imagen' => ('rubro/farmacias.png'),
            'click' => 0,
            'tag' => 'medicina,farmacias',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Artesanias',
            'slug' => Str::slug('artesanias'),
            'imagen' => ('rubro/artesanias.png'),
            'click' => 0,
            'tag' => 'recuerdos,artesanias,souvenir',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Restaurantes',
            'slug' => Str::slug('restaurantes'),
            'imagen' => ('rubro/restaurantes.png'),
            'click' => 0,
            'tag' => 'restaurante,comedor',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Salon Belleza',
            'slug' => Str::slug('salon-belleza'),
            'imagen' => ('rubro/salon-belleza.png'),
            'click' => 0,
            'tag' => 'salones de belleza',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Reparaciones',
            'slug' => Str::slug('reparaciones'),
            'imagen' => ('rubro/reparaciones.png'),
            'click' => 0,
            'tag' => 'Reparación de celulares',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Panaderias',
            'slug' => Str::slug('panaderias'),
            'imagen' => ('rubro/pasteleria.png'),
            'click' => 0,
            'tag' => 'panaderias,pastelerias,pasteles',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 
    }
}