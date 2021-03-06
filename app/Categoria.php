<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";
    protected $fillable = ['categoria'];

    public function ingressos(){
        return $this->hasMany('App\Ingressos');
    }
}
