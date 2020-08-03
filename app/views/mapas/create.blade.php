@extends('layouts.scaffold')
@section('title','Nuevo Mapa')
@section('main')

{{ Form::open(array('route' => 'mapas.store','method' => 'post', 'enctype'=>'multipart/form-data')) }}

<div class="form-row col-md-10">
    <div class="form-input">
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('nombre', 'Nombre:') }}
                {{ Form::text('nombre') }}
            </div>
            <div class="col-md-4">
                {{ Form::label('archivo', 'Archivo:') }}
                {{ Form::file('archivo') }}
            </div>
            <div class="col-md-4">
                {{ Form::label('tipo', 'Tipo:') }}
                {{ Form::select('tipo', $tiposDeMapas) }}
            </div>
        </div>
    </div>
</div>

<br>
<div class="form-row col-md-5">
    <div class="form-input">
        <div class="row">
            <div class="col-md-10">
            <h4>Este mapa abarca a todo el territorio del Chaco</h4>
            </div>
            <div class="col-md-2">
                {{Form::checkbox('provinciacompleta')}}
            </div>
        </div>
    </div>
</div>

<div class="form-row col-md-10">
<h3>Las zonas que se encuentran en el mapa son:</h3><br>
    <div class="form-input">
        <div class="row">

            <div class="col-md-1">
                {{ Form::label('zona1', 'Zona 1') }}
            </div>
            <div class="col-md-1">
                {{Form::checkbox('zona1')}}
            </div>

            <div class="col-md-1">
                {{ Form::label('zona2', 'Zona 2') }}
            </div>
            <div class="col-md-1">
                {{Form::checkbox('zona2')}}
            </div>

            <div class="col-md-1">
                {{ Form::label('zona3', 'Zona 3') }}
            </div>
            <div class="col-md-1">
                {{Form::checkbox('zona3')}}
            </div>

            <div class="col-md-1">
                {{ Form::label('zona4', 'Zona 4') }}
            </div>
            <div class="col-md-1">
                {{Form::checkbox('zona4')}}
            </div>

            <div class="col-md-1">
                {{ Form::label('zona5', 'Zona 5') }}
            </div>
            <div class="col-md-1">
                {{Form::checkbox('zona5')}}
            </div>

        </div>
    </div>
</div>

<div class="form-row col-md-10">
    <div class="form-input">
        <div class="row">
            <div class="col-md-12">
                {{ Form::label('descripcion', 'Descripcion breve:') }}
                {{ Form::text('descripcion') }}
            </div>
        </div>
    </div>
</div>

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


