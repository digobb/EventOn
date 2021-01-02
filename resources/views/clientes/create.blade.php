@extends('adminlte::page')

@section('content')
<h3>Novo Cliente</h3>
<hr size="10">

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors -> all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
{!! Form::open(['route'=>'clientes.store']) !!}
<div class="form-row">
<div class="col-md-4 mb-3">
    {!! Form::label('nome', 'Nome Cliente:')!!}
    {!! Form::text('nome', null, ['class'=>'form-control', 'required', 'placeholder'=>'Digite o nome do Cliente']) !!}
</div>
<div class="col-md-2 mb-3">
    {!! Form::label('cpf', 'CPF:') !!}
    {!! Form::text('cpf', null, ['class'=>'form-control', 'required', 'placeholder'=>'Digite o CPF'])!!}
</div>
<div class="col-md-3 mb-3">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::text('telefone', null, ['class'=>'form-control', 'required', 'placeholder'=>'Digite o telefone'])!!}
</div>
</div>
<div class="form-row">
<div class="col-md-4 mb-3">
    {!! Form::label('cidade_id', 'Cidade:') !!}
    {!! Form::select('cidade_id',
                     \App\Cidade::orderBy('nomeCidade')->pluck('nomeCidade', 'id')->toArray(),
                     null, ['class'=>'form-control', 'required', 'placeholder'=>'Selecione uma cidade...']) !!}
</div>
<div class="col-md-5 mb-3">
    {!! Form::label('endereco', 'Endereço:') !!}
    {!! Form::text('endereco', null, ['class'=>'form-control', 'required', 'placeholder'=>'Digite o Endereço'])!!}
</div>
</div>
<h3>Ingresso</h3>
<hr size="10">
<div class="form-group col-md-5">
    {!! Form::label('ingresso_id', 'Ingresso:') !!}
    {!! Form::select('ingresso_id',
                     \App\Ingresso::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
                     null, ['class'=>'form-control', 'required', 'placeholder'=>'Selecione um ingresso...']) !!}
</div><br>
<div class="form-group">
    {!! Form::submit('Adicionar Cliente', ['class'=>'btn bg-gradient-success']) !!}
    {!! Form::reset('Limpar', ['class'=>'btn bg-gradient-info']) !!}
</div>


{!! Form::close() !!}
@stop
