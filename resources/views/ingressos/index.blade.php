@extends('layouts.default')

@section('content')
	<h1>Ingressos</h1>
	<hr size="10">

	<table class="table table-stripe table-bordered table-hover">
		<thead>
            <th>DESCRIÇÃO</th>
            <th>CATEGORIA</th>
			<th>PREÇO (R$)</th>
			<th>DATA</th>
			<th>OPÇÕES</th>
		</thead>

		<tbody>
			@foreach($ingressos as $ingresso)
				<tr>
                    <td>{{ $ingresso->descricao }}</td>
                    <td>{{ $ingresso->categoria->categoria}}</td>
					<td>{{ $ingresso->preco}}</td>
					<td>{{ Carbon\Carbon::parse($ingresso->data)->format('d/m/Y') }}</td>
					<td>
						<a href="{{ route('ingressos.edit', $ingresso->id) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$ingresso->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

    {{ $ingressos -> links() }}

	<a href="{{ route('ingressos.create', []) }}" class="btn bg-gradient-success">
        <span class="fas fa-plus-circle"></span>
         Adicionar</a>
@stop

@section('table-delete')
"ingressos"
@endsection
