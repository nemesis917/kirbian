<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    protected $table = "catalogo";

    protected $fillable = ["nombres","slug","referencias"];

    public function jeroglifico()
    {
        return $this->hasMany('App\Jeroglifico');
    }


}
