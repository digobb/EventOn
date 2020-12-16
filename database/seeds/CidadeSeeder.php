<?php

use Illuminate\Database\Seeder;
use App\Cidade;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeds Cidades
        Cidade::create(['nomeCidade'=>'Espumoso', 'cep'=>'99400-000', 'uf'=>'RS']);
        Cidade::create(['nomeCidade'=>'Tapera', 'cep'=>'99490-000', 'uf'=>'RS']);
        Cidade::create(['nomeCidade'=>'Soledade', 'cep'=>'98807045', 'uf'=>'RS']);
        Cidade::create(['nomeCidade'=>'Carazinho', 'cep'=>'99500-000', 'uf'=>'RS']);
        Cidade::create(['nomeCidade'=>'Passo Fundo', 'cep'=>'99010-130', 'uf'=>'RS']);
    }
}
