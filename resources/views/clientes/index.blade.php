@extends('layouts.default')

@section('content')
	<h1>Clientes</h1>
	<hr size="10">

	<table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>NOME</th>
            <th>CPF</th>
            <th>CIDADE</th>
			<th>ENDEREÇO</th>
            <th>TELEFONE</th>
            <th>INGRESSO</th>
            <th>CATEGORIA</th>
            <th>OPÇÕES</th>
		</thead>

		<tbody>
			@foreach($clientes as $cliente)
				<tr>
					<td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->cpf}}</td>
                    <td>{{ $cliente->cidade->nomeCidade}}</td>
                    <td>{{ $cliente->endereco}}</td>
                    <td>{{ $cliente->telefone}}</td>
                    <td>{{ $cliente->ingresso->descricao}}</td>
                    <td>{{ $cliente->ingresso->categoria->categoria}}</td>
				<td>
						<a href="{{ route('clientes.edit', $cliente->id) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$cliente->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

    {{ $clientes -> links() }}

    <a href="{{ route('clientes.create', []) }}" class="btn bg-gradient-success">
    <span class="fas fa-plus-circle"></span>
     Adicionar</a>
@stop

@section('table-delete')
"clientes"
@endsection
