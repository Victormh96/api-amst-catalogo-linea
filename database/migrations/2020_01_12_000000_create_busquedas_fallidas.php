<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('busqueda_fallida', function (Blueprint $table) {
            $table->id();
            $table->string('busqueda');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('busqueda_fallida');
    }

};