<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ComentariosJero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios_jero', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('comentario', 1500);
            $table->char('puntuacion', 1);
            $table->boolean('visibilidad');
            $table->unsignedBigInteger('jeroglificos_id');
            $table->unsignedBigInteger('users_id');
            
            $table->foreign('jeroglificos_id')->references('id')->on('jeroglificos');
            $table->foreign('users_id')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('imagenes_comentario_jero', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ruta_img_jero', 250);
            $table->unsignedBigInteger('jeroglificos_id');
            $table->unsignedBigInteger('users_id');

            $table->foreign('jeroglificos_id')->references('id')->on('jeroglificos');
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('imagenes_comentario_jero');
        Schema::dropIfExists('comentarios_jero');
    }
}
