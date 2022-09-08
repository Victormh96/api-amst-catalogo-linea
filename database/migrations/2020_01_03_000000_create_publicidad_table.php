<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('publicidad', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('imagen');
            $table->integer('click');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('publicidad');
    }
};