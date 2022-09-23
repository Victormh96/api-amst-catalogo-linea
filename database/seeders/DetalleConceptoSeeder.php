<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleConceptoSeeder extends Seeder
{
    public function run()
    {
        DB::table('detalle_concepto')->insert([
            'descripcion' => 'Paseo el Carmen',
            'imagen' => ('concepto/paseo-carmen.png'),
            'click' => 0,
            'slug' => Str::slug('paseo-el-carmen'),
            'tags' => 'paseo,carmen,concepcion,vida nocturna',
            'estado' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
