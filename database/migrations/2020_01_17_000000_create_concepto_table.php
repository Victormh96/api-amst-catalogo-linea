<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('concepto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_detalle_concepto');
            $table->foreign('id_detalle_concepto')->references('id')->on('detalle_concepto')->onDelete('cascade');
            $table->unsignedBigInteger('id_cuenta');
            $table->foreign('id_cuenta')->references('id')->on('cuenta')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('concepto');
    }
};