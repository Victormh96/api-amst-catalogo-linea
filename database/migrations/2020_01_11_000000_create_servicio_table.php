<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('servicio', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion');
            $table->string('anios_experiencia');
            $table->unsignedBigInteger('id_rubro');
            $table->foreign('id_rubro')->references('id')->on('rubro')->onDelete('cascade');
            $table->unsignedBigInteger('id_cuenta');
            $table->foreign('id_cuenta')->references('id')->on('cuenta')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicio');
    }
};