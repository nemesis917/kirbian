<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen_jeroglifico extends Model
{
    protected $table = "imagenes_jeroglificos";

    protected $fillable = ['ruta_imagen', 'referencia', 'jeroglificos_id'];

    public function jeroglificos()
    {
        return $this->belongsTo('App\Jeroglifico');
    }



}
