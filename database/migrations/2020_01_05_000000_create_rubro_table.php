<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rubro', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_rubro')->unique();
            $table->string('slug')->unique();
            $table->string('imagen');
            $table->integer('click');
            $table->string('tag');
            $table->boolean('estado');
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categoria')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rubro');
    }
};