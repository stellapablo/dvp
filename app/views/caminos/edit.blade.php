@extends('layouts.scaffold')
@section('title', 'Editar Camino o Puente')
@section('main')

{{ Form::model($camino, array('method' => 'PATCH', 'route' => array('caminos.update', $camino->id))) }}

<div class="form-row">
    <div class="form-input col-md-9">
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('nombre', 'Nombre:') }}
                {{ Form::text('nombre') }}
            </div>
            <div class="col-md-3">
                {{ Form::label('tipo', 'Tipo:') }}
                {{ Form::select('tipo', $tipos) }}
            </div>
            <div class="col-md-3">
                {{ Form::label('estado', 'Estado:') }}
                {{ Form::select('estado', $estados) }}
            </div>
        </div>
    </div>
</div>
<br>
<div class="form-row">
    <div class="form-input col-md-1"></div>
    {{ Form::submit('Actualizar', array('class' => 'form-input col-md-1 btn medium bg-blue')) }}
    <div class="form-input col-md-1"></div>
    {{ link_to_route('caminos.index', 'Cancelar', $camino->id, array('class' => 'form-input col-md-1 btn medium bg-yellow')) }}
    {{ Form::close() }}
    <div class="form-input col-md-1"></div>
    {{ Form::open(array('method' => 'DELETE', 'route' => array('caminos.destroy', $camino->id))) }}
    {{ Form::submit('Eliminar', array('class' => 'form-input col-md-1 btn medium bg-red')) }}
    {{ Form::close() }}
</div>

@if ($errors->any())
<ul>
  {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop
