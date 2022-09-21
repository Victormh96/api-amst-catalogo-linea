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
            $table->string('descripcion');
            $table->string('marca')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('documento')->unique();
            $table->string('foto')->nullable()->default('cuenta/default.png');
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->string('direccion')->nullable()->default('Sin Localización');
            $table->string('horario')->nullable();
            $table->boolean('local')->nullable()->default(false);
            $table->boolean('servicio_domicilio')->nullable()->default(false);
            $table->boolean('verificado')->default(false);
            $table->string('tags')->nullable();
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