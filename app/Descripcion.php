<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descripcion extends Model
{
    protected $table = "descripcion";

    protected $fillable = ['descripcion', 'jeroglificos_id'];

    public function jeroglifico(){
        return $this->belongsTo('App\Jeroglifico');
    }

}
