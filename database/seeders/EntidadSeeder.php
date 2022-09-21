<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntidadSeeder extends Seeder
{
    public function run()
    {
        DB::table('genero')->insert([
            'nombre_genero' => 'Servicio Profesional',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('genero')->insert([
            'nombre_genero' => 'Micro Empresa',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('genero')->insert([
            'nombre_genero' => 'Empresa',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}