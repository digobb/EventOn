<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Http\Requests\CategoriaRequest;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::orderBy('categoria')->paginate(10); //irá retornar em ordem alfabética de 5 em 5 itens
        return view('categorias.index', ['categorias' => $categorias]);
    }

    //retorna lista de categorias
    public function create()
    {
        return view('categorias.create');
    }

    //criar categorias
    public function store(CategoriaRequest $request){
        $novo_categoria = $request->all();
        Categoria::create($novo_categoria);
        return redirect()->route('categorias');
    }

    //edita categorias
    // Categoria é o model
    public function edit($id){
        $categorias = Categoria::find($id);
        return view('categorias.edit', compact('categorias'));
    }

    //toda e qualquer alteração no banco de dados deve fazer a validação no ingressoRequest que criamos
    public function update(CategoriaRequest $request, $id){
        Categoria::find($id)->update($request->all());
        return redirect()->route('categorias');
    }

    //excluir categorias
    public function destroy($id){
        Categoria::find($id)->delete(); //busca o id que está na tabela ingresso e então deleta
        return redirect()->route('categorias'); //redireciona para tela de categorias
    }
}
