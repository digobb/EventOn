@extends('adminlte::page')

@section('content')
<h3>Editar Ingresso</h3>
<hr size="10">

@if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

{!! Form::open(['route'=> ["ingressos.update", 'id'=>$ingressos->id], 'method'=>'put']) !!}

<div class="form-group">
    {!! Form::label('descricao', 'DESCRIÇÃO INGRESSO:')!!}
    {!! Form::text('descricao', $ingressos->descricao, ['class'=>'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('categoria_id', 'CATEGORIA:') !!}
    {!! Form::select('categoria_id',
                     \App\Categoria::orderBy('categoria')->pluck('categoria', 'id')->toArray(),
                     $ingressos->categoria_id, ['class'=>'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('preco', 'PREÇO INGRESSO R$:') !!}
    {!! Form::text('preco', $ingressos->preco, ['class'=>'form-control', 'required'])!!}
</div>
<div class="form-group">
    {!! Form::label('data', 'DATA:') !!}
    {!! Form::text('data', $ingressos->data, ['class'=>'form-control', 'required'])!!}
</div>
<div class="form-group">
    {!! Form::submit('Editar Ingresso', ['class'=>'btn bg-gradient-success']) !!}
    <a class="btn bg-gradient-primary" href="{{ URL::previous() }}">Voltar</a>
</div>

{!! Form::close() !!}
@stop
