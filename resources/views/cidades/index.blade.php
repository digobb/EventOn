@extends('layouts.default')

@section('content')
	<h1>Cidades</h1>
	<hr size="10">

	<table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>CIDADE</th>
			<th>CEP</th>
			<th>UF</th>
			<th>OPÇÕES</th>
		</thead>

		<tbody>
			@foreach($cidades as $cidade)
				<tr>
					<td>{{ $cidade->nomeCidade }}</td>
					<td>{{ $cidade->cep}}</td>
					<td>{{ $cidade->uf}}</td>
					<td>
						<a href="{{ route('cidades.edit', $cidade->id) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$cidade->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

    {{ $cidades -> links() }}

	<a href="{{ route('cidades.create', []) }}" class="btn bg-gradient-success">
        <span class="fas fa-plus-circle"></span>
         Adicionar</a>
@stop

@section('table-delete')
"cidades"
@endsection
