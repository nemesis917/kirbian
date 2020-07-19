<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario_jero extends Model
{
    protected $table = "comentarios_jero";

    protected $fillable = [ 'comentario', 'puntuacion', 'visibilidad','jeroglificos_id' ];
}
