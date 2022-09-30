<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('detalle_concepto', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion')->unique();
            $table->string('imagen');
            $table->integer('click');
            $table->string('slug');
            $table->string('tag');
            $table->boolean('estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalle_concepto');
    }
};