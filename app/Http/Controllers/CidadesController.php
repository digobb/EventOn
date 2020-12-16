<?php

namespace App\Http\Controllers;

use App\Cidade;
use Illuminate\Http\Request;
use App\Http\Requests\CidadeRequest;

class CidadesController extends Controller
{
    public function index()
    {
        $cidades = Cidade::orderBy('nomeCidade')->paginate(10); //irá retornar em ordem alfabética de 5 em 5 itens
        return view('cidades.index', ['cidades' => $cidades]);
    }

    //retorna lista de cidades
    public function create()
    {
        return view('cidades.create');
    }

    //criar cidades
    public function store(cidadeRequest $request){
        $novo_cidade = $request->all();
        cidade::create($novo_cidade);
        return redirect()->route('cidades');
    }

    //edita cidades
    public function edit($id){
        $cidades = Cidade::find($id);
        return view('cidades.edit', compact('cidades'));
    }

    //toda e qualquer alteração no banco de dados deve fazer a validação no cidadeRequest que criamos
    public function update(cidadeRequest $request, $id){
        cidade::find($id)->update($request->all());
        return redirect()->route('cidades');
    }

    //excluir cidades
    public function destroy($id){
        cidade::find($id)->delete(); //busca o id que está na tabela cidade e então deleta
        return redirect()->route('cidades'); //redireciona para tela de cidades
    }
}
