<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests\ClienteRequest;
class ClientesController extends Controller
{
    public function index()
    {
        $clientes = cliente::orderBy('nome')->paginate(10); //irá retornar em ordem alfabética de 5 em 5 itens
        return view('clientes.index', ['clientes' => $clientes]);
    }

    //retorna lista de clientes
    public function create()
    {
        return view('clientes.create');
    }

    //criar clientes
    public function store(clienteRequest $request){
        $novo_cliente = $request->all();
        cliente::create($novo_cliente);
        return redirect()->route('clientes');
    }

    //edita clientes
    public function edit($id){
        $clientes = cliente::find($id);
        return view('clientes.edit', compact('clientes'));
    }

    //toda e qualquer alteração no banco de dados deve fazer a validação no clienteRequest que criamos
    public function update(clienteRequest $request, $id){
        cliente::find($id)->update($request->all());
        return redirect()->route('clientes');
    }

    //excluir clientes
    public function destroy($id){
        cliente::find($id)->delete(); //busca o id que está na tabela cliente e então deleta
        return redirect()->route('clientes'); //redireciona para tela de clientes
    }
}
