<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen_comentario_jero extends Model
{
    protected $table ="imagenes_comentarios_jero";

    protected $fillable = ['ruta_img_jero','comentarios_id'];
}
