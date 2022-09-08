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
            'imagen' => ('/rubro/mecanico.png'),
            'click' => 0,
            'tags' => 'zzzzzz,yyyyyy',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('rubro')->insert([
            'nombre_rubro' => 'Albañil',
            'slug' => Str::slug('albañil'),
            'imagen' => ('/rubro/albañil.png'),
            'click' => 0,
            'tags' => 'zzzzzz,yyyyyy',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Fontanero',
            'slug' => Str::slug('fontanero'),
            'imagen' => ('/rubro/fontanero.png'),
            'click' => 0,
            'tags' => 'zzzzzz,yyyyyy',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Medico',
            'slug' => Str::slug('medico'),
            'imagen' => ('/rubro/medico.png'),
            'click' => 0,
            'tags' => 'zzzzzz,yyyyyy',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Niñera',
            'slug' => Str::slug('niñera'),
            'imagen' => ('/rubro/niñera.png'),
            'click' => 0,
            'tags' => 'zzzzzz,yyyyyy',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Artesano',
            'slug' => Str::slug('artesano'),
            'imagen' => ('/rubro/artesano.png'),
            'click' => 0,
            'tags' => 'vvvvv,hhhhh',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Panadero',
            'slug' => Str::slug('panadero'),
            'imagen' => ('/rubro/panadero.png'),
            'click' => 0,
            'tags' => 'vvvvv,hhhhh',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Peluquero',
            'slug' => Str::slug('peluquero'),
            'imagen' => ('/rubro/peluquero.png'),
            'click' => 0,
            'tags' => 'vvvvv,hhhhh',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Músico',
            'slug' => Str::slug('musico'),
            'imagen' => ('/rubro/musico.png'),
            'click' => 0,
            'tags' => 'vvvvv,hhhhh',
            'estado' => true,
            'id_categoria' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        //Empresas
        DB::table('rubro')->insert([
            'nombre_rubro' => 'Escritor-E',
            'slug' => Str::slug('escritor-e'),
            'imagen' => ('/rubro/escritor.png'),
            'click' => 0,
            'tags' => 'vvvvv,hhhhh',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('rubro')->insert([
            'nombre_rubro' => 'Vigilante-E',
            'slug' => Str::slug('vigilante-e'),
            'imagen' => ('/rubro/vigilante.png'),
            'click' => 0,
            'tags' => 'vvvvv,hhhhh',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Psicólogo-E',
            'slug' => Str::slug('psicologo-e'),
            'imagen' => ('/rubro/psicologo.png'),
            'click' => 0,
            'tags' => 'vvvvv,hhhhh',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Mecánico-E',
            'slug' => Str::slug('mecanico-e'),
            'imagen' => ('/rubro/mecanico.png'),
            'click' => 0,
            'tags' => 'vvvvv,hhhhh',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('rubro')->insert([
            'nombre_rubro' => 'Albañil-E',
            'slug' => Str::slug('albañil-e'),
            'imagen' => ('/rubro/albañil.png'),
            'click' => 0,
            'tags' => 'vvvvv,hhhhh',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Fontanero-E',
            'slug' => Str::slug('fontanero-e'),
            'imagen' => ('/rubro/fontanero.png'),
            'click' => 0,
            'tags' => 'vvvvv,hhhhh',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Medico-E',
            'slug' => Str::slug('medico-e'),
            'imagen' => ('/rubro/medico.png'),
            'click' => 0,
            'tags' => 'vvvvv,hhhhh',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Niñera-E',
            'slug' => Str::slug('niñera-e'),
            'imagen' => ('/rubro/niñera.png'),
            'click' => 0,
            'tags' => 'zzzzzz,yyyyyy',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Artesano-E',
            'slug' => Str::slug('artesano-e'),
            'imagen' => ('/rubro/artesano.png'),
            'click' => 0,
            'tags' => 'zzzzzz,yyyyyy',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Panadero-E',
            'slug' => Str::slug('panadero-e'),
            'imagen' => ('/rubro/panadero.png'),
            'click' => 0,
            'tags' => 'zzzzzz,yyyyyy',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Peluquero-E',
            'slug' => Str::slug('peluquero-e'),
            'imagen' => ('/rubro/peluquero.png'),
            'click' => 0,
            'tags' => 'zzzzzz,yyyyyy',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Músico-E',
            'slug' => Str::slug('musico-e'),
            'imagen' => ('/rubro/musico.png'),
            'click' => 0,
            'tags' => 'zzzzzz,yyyyyy',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('rubro')->insert([
            'nombre_rubro' => 'Soldador',
            'slug' => Str::slug('soldador'),
            'imagen' => ('/rubro/soldador.png'),
            'click' => 0,
            'tags' => 'zzzzzz,yyyyyy',
            'estado' => true,
            'id_categoria' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}