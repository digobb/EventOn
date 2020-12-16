@extends('adminlte::page')

@section('content')
<h3>Editar Categoria</h3>
<hr size="10">

@if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

{!! Form::open(['route'=> ["categorias.update", 'id'=>$categorias->id], 'method'=>'put']) !!}

<div class="form-group">
    {!! Form::label('categoria', 'Categoria:') !!}
    {!! Form::text('categoria', $categorias->categoria, ['class'=>'form-control', 'required'])!!}
</div>
<div class="form-group">
    {!! Form::submit('Editar Categoria', ['class'=>'btn bg-gradient-success']) !!}
    <a class="btn bg-gradient-primary" href="{{ URL::previous() }}">Voltar</a>
</div>

{!! Form::close() !!}
@stop
