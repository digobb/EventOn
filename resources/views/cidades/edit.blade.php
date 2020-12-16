@extends('adminlte::page')

@section('content')
<h3>Editar Cidade</h3>
<hr size="10">

@if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

{!! Form::open(['route'=> ["cidades.update", 'id'=>$cidades->id], 'method'=>'put']) !!}

<div class="form-group">
    {!! Form::label('nomeCidade', 'Nome da Cidade:')!!}
    {!! Form::text('nomeCidade', $cidades->nomeCidade, ['class'=>'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('cep', 'CEP:') !!}
    {!! Form::text('cep', $cidades->cep, ['class'=>'form-control', 'required'])!!}
</div>
<div class="form-group">
    {!! Form::label('uf', 'UF:') !!}
    {!! Form::text('uf', $cidades->uf, ['class'=>'form-control', 'required'])!!}
</div>
<div class="form-group">
    {!! Form::submit('Editar Cidade', ['class'=>'btn bg-gradient-success']) !!}
    <a class="btn bg-gradient-primary" href="{{ URL::previous() }}">Voltar</a>
</div>

{!! Form::close() !!}
@stop
