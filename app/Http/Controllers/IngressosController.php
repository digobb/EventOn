<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\IngressoRequest;
use App\Ingresso;

class IngressosController extends Controller
{
    public function index()
    {
        $ingressos = ingresso::orderBy('descricao')->paginate(10); //irá retornar em ordem alfabética de 5 em 5 itens
        return view('ingressos.index', ['ingressos' => $ingressos]);
    }

    //retorna lista de ingressos
    public function create()
    {
        return view('ingressos.create');
    }

    //criar ingressos
    public function store(ingressoRequest $request){
        $novo_ingresso = $request->all();
        ingresso::create($novo_ingresso);
        return redirect()->route('ingressos');
    }

    //edita ingressos
    public function edit($id){
        $ingressos = ingresso::find($id);
        return view('ingressos.edit', compact('ingressos'));
    }

    //toda e qualquer alteração no banco de dados deve fazer a validação no ingressoRequest que criamos
    public function update(ingressoRequest $request, $id){
        ingresso::find($id)->update($request->all());
        return redirect()->route('ingressos');
    }

    //excluir ingressos
    public function destroy($id){
        ingresso::find($id)->delete(); //busca o id que está na tabela ingresso e então deleta
        return redirect()->route('ingressos'); //redireciona para tela de ingressos
    }
}
