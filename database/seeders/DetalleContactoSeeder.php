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
            'icon' => 'fab fa-facebook-square',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'Instagram',
            'icon' => 'fab fa-instagram',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'Twitter',
            'icon' => 'fab fa-twitter',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'LinkedIn',
            'icon' => 'fab fa-linkedin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'WhatsApp',
            'icon' => 'fab fa-whatsapp',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'Web',
            'icon' => 'fa-solid fa-globe',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'Teléfono',
            'icon' => 'fa-solid fa-mobile-screen-button',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('detalle_contacto')->insert([
            'descripcion' => 'Teléfono Fijo',
            'icon' => 'fa fa-phone',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}