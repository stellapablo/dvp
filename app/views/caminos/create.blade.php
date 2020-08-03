@extends('layouts.scaffold')
@section('title', 'Nuevo Camino o Puente')
@section('main')

{{ Form::open(array('route' => 'caminos.store')) }}
<div class="form-row">
    <div class="form-input col-md-10">
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
    <div class="form-input col-md-4"></div>
    {{ Form::submit('Guardar', array('class' => 'form-input col-md-2 btn medium bg-blue')) }}       
    <div class="form-input col-md-4"></div>
</div>

{{ Form::close() }}

@if ($errors->any())
<ul>
  {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop


