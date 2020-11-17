<?php

namespace App\Http\Controllers;

use App\Ator;
use Illuminate\Http\Request;
use App\Http\Requests\AtorRequest;

class AtoresController extends Controller
{

    public function index()
    {
        $atores = Ator::orderBy('nome')->paginate(5); //irá retornar em ordem alfabética de 5 em 5 itens
        return view('atores.index', ['atores' => $atores]);
    }

    //retorna lista de atores
    public function create()
    {
        return view('atores.create');
    }

    //criar atores 
    public function store(AtorRequest $request){
        $novo_ator = $request->all();
        Ator::create($novo_ator);
        return redirect()->route('atores');
    }

    //edita atores
    public function edit($id){
        $ator = Ator::find($id);
        return view('atores.edit', compact('ator'));
    }

    //toda e qualquer alteração no banco de dados deve fazer a validação no AtorRequest que criamos 
    public function update(AtorRequest $request, $id){
        Ator::find($id)->update($request->all());
        return redirect()->route('atores');
    }

    //excluir atores
    public function destroy($id){
        Ator::find($id)->delete(); //busca o id que está na tabela Ator e então deleta
        return redirect()->route('atores'); //redireciona para tela de atores
    }
}
