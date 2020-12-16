@extends('adminlte::page')

@section('content')
<h3>Editar Cliente</h3>
<hr size="10">

@if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

{!! Form::open(['route'=> ["clientes.update", 'id'=>$clientes->id], 'method'=>'put']) !!}

<div class="form-group">
    {!! Form::label('nome', 'Nome do Cliente:')!!}
    {!! Form::text('nome', $clientes->nome, ['class'=>'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('cpf', 'CPF:') !!}
    {!! Form::text('cpf', $clientes->cpf, ['class'=>'form-control', 'required'])!!}
</div>
<div class="form-group">
    {!! Form::label('cidade_id', 'Cidade:') !!}
    {!! Form::select('cidade_id',
                     \App\Cidade::orderBy('nomeCidade')->pluck('nomeCidade', 'id')->toArray(),
                     $clientes->cidade_id, ['class'=>'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('endereco', 'Endereço:') !!}
    {!! Form::text('endereco', $clientes->endereco, ['class'=>'form-control', 'required'])!!}
</div>
<div class="form-group">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::text('telefone', $clientes->telefone, ['class'=>'form-control', 'required'])!!}
</div>
<h3>Ingresso</h3>
<hr size="10">
<div class="form-group">
    {!! Form::label('ingresso_id', 'Ingresso:') !!}
    {!! Form::select('ingresso_id',
                     \App\Ingresso::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
                     $clientes->ingresso_id, ['class'=>'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Editar Cliente', ['class'=>'btn bg-gradient-success']) !!}
    <a class="btn bg-gradient-primary" href="{{ URL::previous() }}">Voltar</a>
</div>

{!! Form::close() !!}
@stop
