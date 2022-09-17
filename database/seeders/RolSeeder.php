<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    public function run()
    {
        DB::table('rol')->insert([
            'nombre_rol' => 'Admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('rol')->insert([
            'nombre_rol' => 'Verificador',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('rol')->insert([
            'nombre_rol' => 'Usuario',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}