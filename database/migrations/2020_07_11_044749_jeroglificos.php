<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jeroglificos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeroglificos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gandiner', 12);
            $table->string('transliteracion', 200);
            $table->text('sentido', 1300);
            $table->string('nombre_usuario', 70);
            $table->text('comentario',1300)->nullable();
            $table->unsignedBigInteger('catalogo_id');
            $table->boolean('visibilidad');

            $table->foreign('catalogo_id')->references('id')->on('catalogo');
            $table->timestamps();
        });

        Schema::create('imagenes_jeroglificos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ruta_imagen', 100);
            $table->string('referencia', 60);
            $table->unsignedBigInteger('jeroglifico_id');

            $table->foreign('jeroglifico_id')->references('id')->on('jeroglificos');
            $table->timestamps();
        });

        Schema::create('descripcion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('descripcion', 1300);
            $table->unsignedBigInteger('jeroglifico_id');

            $table->foreign('jeroglifico_id')->references('id')->on('jeroglificos');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('descripcion');
        Schema::dropIfExists('imagenes_jeroglificos');
        Schema::dropIfExists('jeroglificos');
    }
}
