<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create(['categoria'=>'Stand Up']);
        Categoria::create(['categoria'=>'Shows']);
        Categoria::create(['categoria'=>'Parques']);
        Categoria::create(['categoria'=>'Eventos']);
        Categoria::create(['categoria'=>'Passeios']);
        Categoria::create(['categoria'=>'Viagens']);

    }
}
