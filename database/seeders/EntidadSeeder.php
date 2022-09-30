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
        DB::table('entidad')->insert([
            'nombre_entidad' => 'Servicios Profesionales',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('entidad')->insert([
            'nombre_entidad' => 'Micro Empresas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('entidad')->insert([
            'nombre_entidad' => 'Empresas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}