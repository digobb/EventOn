<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Ingresso extends Model
{
    protected $table = "ingressos";
    protected $fillable = ['descricao', 'preco', 'data', 'categoria_id'];

    public function clientes(){
        return $this->hasMany('App\Cliente');
    }
    public function categoria(){ //ingresso conterá o objeto categoria
        return $this->belongsTo('App\Categoria');
    }
}
