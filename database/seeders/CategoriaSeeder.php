<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('categoria')->insert([
            'nombre_categoria' => 'Servicio Profesional',
            'slug' => Str::slug('servicios-profesionales'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('categoria')->insert([
            'nombre_categoria' => 'Empresa',
            'slug' => Str::slug('empresas'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}