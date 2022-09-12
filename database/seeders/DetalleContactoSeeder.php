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
            'clase' => 'fab fa-facebook-square',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'Instagram',
            'clase' => 'fab fa-instagram',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'Twitter',
            'clase' => 'fab fa-twitter',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'LinkedIn',
            'clase' => 'fab fa-linkedin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'WhatsApp',
            'clase' => 'fab fa-whatsapp',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'Web',
            'clase' => 'fa-solid fa-globe',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'Teléfono',
            'clase' => 'fa-solid fa-mobile-screen-button',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'Teléfono Fijo',
            'clase' => 'fa fa-phone',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}