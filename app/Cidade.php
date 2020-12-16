<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $table = "cidades";
    protected $fillable = ['nomeCidade', 'cep', 'uf'];

    public function clientes(){
        return $this->hasMany('App\Cliente');
    }
}
