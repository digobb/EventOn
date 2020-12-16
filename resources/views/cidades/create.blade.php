@extends('adminlte::page')

{!! Form::open(['route'=>'cidades.store']) !!}

@section('content')
<h3>Nova Cidade</h3>
<hr size="10">

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors -> all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
<div class="form-row">
<div class="col-md-4 mb-3">
    {!! Form::label('nomeCidade', 'Nome da Cidade:')!!}
    {!! Form::text('nomeCidade', null, ['class'=>'form-control', 'required' , 'placeholder'=>'Digite o nome da nova Cidade']) !!}
</div>
</div>
<div class="form-row">
<div class="col-md-2 mb-3">
    {!! Form::label('cep', 'CEP:') !!}
    {!! Form::text('cep', null, ['class'=>'form-control', 'required', 'placeholder'=>'Digite o CEP'])!!}
</div>
<div class="col-md-1 mb-3">
    {!! Form::label('uf', 'UF:') !!}
    {!! Form::text('uf', null, ['class'=>'form-control', 'required', 'placeholder'=>'Digite o UF'])!!}
</div>
</div>
<div class="form-group">
    {!! Form::submit('Adicionar Cidade', ['class'=>'btn bg-gradient-success']) !!}
    {!! Form::reset('Limpar', ['class'=>'btn bg-gradient-info']) !!}
</div>

{!! Form::close() !!}
@stop
