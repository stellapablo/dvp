@extends('layouts.scaffold')
@section('title','Editar Mapa')
@section('main')

{{ Form::model($mapa, array('method' => 'PATCH', 'route' => array('mapas.update', $mapa->id), 'enctype'=>'multipart/form-data')) }}
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
    <div class="form-input col-md-2">
        <a href="{{url('mapas')}}" class="btn medium bg-yellow" title="">
            <span class="button-content">Cancelar</span>
        </a>
    </div>
    {{ Form::close() }}
    <div class="form-input col-md-4">
        {{ Form::open(array('method' => 'DELETE', 'route' => array('mapas.destroy', $mapa->id))) }}
        {{ Form::submit('Eliminar mapa', array('class' => 'col-md-4 btn medium bg-green')) }}
        {{ Form::close() }}
    </div>
</div>

@if ($errors->any())
<ul>
  {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

<div class="row col-sm-10">
    <div class="col-sm-6">

        {{ Form::open(array('route' => 'deptoxmapas.store')) }}
        <h4>Agregar departamento</h4> <br>
        {{Form::hidden('mapa', $mapa->id)}}        
        <div class="form-row col-md-12">
            <div class="form-input">
                <div class="row">
                    <div class="col-md-9">
                        {{ Form::select('departamento', $departamentos, null, ['class'=>'form']) }}
                    </div>
                    <div class="col-md-3">
                        {{ Form::submit('Agregar', array('class' => 'col-md-12 btn medium bg-blue')) }}
                    </div>
                </div>
            </div>
        </div>

        {{ Form::close() }}

        @if ($errors->any())
        <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
        @endif
        
        <table class="table">
            @foreach ($deptoxmapas as $deptoxmapa)        
            <tr>
                <td>{{{ Departamento::find($deptoxmapa->departamento)->nombre }}}</td>
                <td>
                    {{ Form::open(array('method' => 'DELETE', 'route' => array('deptoxmapas.destroy', $deptoxmapa->id))) }}
                    {{ Form::submit('Eliminar', array('class' => 'col-md-12 btn medium bg-red')) }}
                    {{ Form::close() }}
                </td>
            </tr>        
            @endforeach
        </table>

    </div>
    <div class="col-sm-6">

        {{ Form::open(array('route' => 'consorcioxmapas.store')) }}
        <h4>Agregar Consorcio</h4> <br>
        {{Form::hidden('mapa', $mapa->id)}}        
        <div class="form-row col-md-12">
            <div class="form-input">
                <div class="row">
                    <div class="col-md-9">
                        {{ Form::select('consorcio', $consorcios, null, ['class'=>'form']) }}
                    </div>
                    <div class="col-md-3">
                        {{ Form::submit('Agregar', array('class' => 'col-md-12 btn medium bg-blue')) }}
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}

        @if ($errors->any())
        <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
        @endif
        
        <table class="table">
            @foreach ($consorcioxmapas as $consorcioxmapa)       
            <tr>
                <td>{{{ Consorcio::find($consorcioxmapa->consorcio)->nombre }}}</td>
                <td>
                    {{ Form::open(array('method' => 'DELETE', 'route' => array('consorcioxmapas.destroy', $consorcioxmapa->id))) }}
                    {{ Form::submit('Eliminar', array('class' => 'col-md-5 btn medium bg-red')) }}
                    {{ Form::close() }}
                </td>
            </tr>        
            @endforeach
        </table>

    </div>
</div>

@stop
