<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";
    protected $fillable = ['nome', 'cpf', 'endereco', 'telefone', 'cidade_id', 'ingresso_id'];

    public function cidade(){
        return $this->belongsTo('App\Cidade');
    }
    public function ingresso(){
        return $this->belongsTo('App\Ingresso');
    }
}
