<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cuenta', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cuenta');
            $table->string('slug')->unique();
            $table->string('email')->unique();
            $table->text('descripcion');
            $table->string('representante')->nullable();
            $table->string('marca')->nullable();
            $table->string('logo')->nullable();
            $table->date('fecha')->nullable();
            $table->string('documento')->unique();
            $table->string('foto');
            $table->string('latitud')->nullable()->default(0);
            $table->string('longitud')->nullable()->default(0);
            $table->string('direccion')->nullable()->default('Sin Localización');
            $table->string('horario')->nullable();
            $table->boolean('local')->nullable()->default(false);
            $table->boolean('servicio_domicilio')->nullable()->default(false);
            $table->boolean('verificado')->default(false);
            $table->string('tag')->nullable();
            $table->boolean('estado')->default(false);
            $table->unsignedBigInteger('id_genero')->nullable();
            $table->foreign('id_genero')->references('id')->on('genero')->onDelete('cascade');
            $table->unsignedBigInteger('id_entidad')->nullable();
            $table->foreign('id_entidad')->references('id')->on('entidad')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cuenta');
    }
};