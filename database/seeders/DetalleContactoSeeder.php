<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleContactoSeeder extends Seeder
{
    public function run()
    {
        DB::table('detalle_contacto')->insert([
            'descripcion' => 'Facebook',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'Instagram',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'Twitter',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'LinkedIn',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'WhatsApp',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'Web',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'Teléfono',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'Teléfono Fijo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}