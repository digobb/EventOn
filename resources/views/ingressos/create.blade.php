@extends('adminlte::page')

{!! Form::open(['route'=>'ingressos.store']) !!}

@section('content')
<h3>Novo Ingresso</h3>
<hr size="10">

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors -> all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

<div class="form-row">
<div class="col-md-5 mb-3">
    {!! Form::label('descricao', 'DESCRIÇÃO:')!!}
    {!! Form::text('descricao', null, ['class'=>'form-control', 'required']) !!}
</div>
    <div class="col-md-3 mb-3">
        {!! Form::label('categoria_id', 'CATEGORIA:') !!}
        {!! Form::select('categoria_id',
                         \App\Categoria::orderBy('categoria')->pluck('categoria', 'id')->toArray(),
                         null, ['class'=>'form-control', 'required']) !!}
    </div>
</div>
<div class="form-row">
<div class="col-md-1 mb-3">
    {!! Form::label('preco', 'PREÇO R$:') !!}
    {!! Form::text('preco', null, ['class'=>'form-control', 'required'])!!}
</div>
<div class="col-md-2 mb-3">
    {!! Form::label('data', 'DATA:') !!}
    {!! Form::date('data', null, ['class'=>'form-control', 'required'])!!}
</div>
</div>
<div class="form-group">
    {!! Form::submit('Adicionar Ingresso', ['class'=>'btn bg-gradient-success']) !!}
    {!! Form::reset('Limpar', ['class'=>'btn bg-gradient-info']) !!}
</div>

{!! Form::close() !!}
@stop
