@extends('adminlte::page')

@section('content')
<h3>Nova Categoria</h3>
<hr size="10">

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors -> all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

 {!! Form::open(['route'=>'categorias.store']) !!}
 <div class="form-row">
<div class="col-md-4 mb-3">
    {!! Form::label('categoria', 'Categoria:')!!}
    {!! Form::text('categoria', null, ['class'=>'form-control', 'required', 'placeholder'=>'Digite uma nova Categoria']) !!}
</div>
 </div>
<div class="form-group">
    {!! Form::submit('Adicionar Categoria', ['class'=>'btn bg-gradient-success']) !!}
    {!! Form::reset('Limpar', ['class'=>'btn bg-gradient-info']) !!}
</div>

{!! Form::close() !!}
@stop
