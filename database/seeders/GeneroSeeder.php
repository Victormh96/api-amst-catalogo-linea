<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    public function run()
    {
        DB::table('genero')->insert([
            'nombre_genero' => 'Masculino',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('genero')->insert([
            'nombre_genero' => 'Femenino',
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