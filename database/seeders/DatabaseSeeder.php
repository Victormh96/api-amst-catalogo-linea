<?php
// php artisan make:seeder nombre-seeder

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(DetalleContactoSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(RubroSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(EntidadSeeder::class);
        $this->call(RolSeeder::class);
    }
}