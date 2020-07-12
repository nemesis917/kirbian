<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jeroglifico extends Model
{
    protected $table = "jeroglificos";

    protected $fillable = ['gardiner','trasliteracion', 'sentido','nombre_usuario', 'catalogo_id'];

    public function descripciones()
    {
        return $this->hasMany('App\Descripcion');
    }

    public function catalogos()
    {
        return $this->belongsTo('App\Catalogo');
    }

    public function imagenes_jeroglificos()
    {
        return $this->hasMany('App\Imagen_jeroglifico');
    }


}
