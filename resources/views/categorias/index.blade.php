@extends('layouts.default')

@section('content')
	<h1>Categorias</h1>
	<hr size="10">

	<table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>CATEGORIA</th>
			<th>OPÇÕES</th>
		</thead>

		<tbody>
			@foreach($categorias as $categoria)
				<tr>
					<td>{{ $categoria->categoria }}</td>
					<td>
						<a href="{{ route('categorias.edit', $categoria->id) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$categoria->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

    {{ $categorias -> links() }}

	<a href="{{ route('categorias.create', []) }}" class="btn bg-gradient-success">
        <span class="fas fa-plus-circle"></span>
         Adicionar</a>
@stop

@section('table-delete')
"categorias"
@endsection
