@extends('layouts.scaffold')
@section('title','Editar Consorcio')
@section('main')

{{ Form::model($consorcio, array('method' => 'PATCH', 'route' => array('consorcios.update', $consorcio->id))) }}
<div class="form-row">
    <div class="form-input col-md-10">
        <div class="row">
            <div class="col-md-2">
                {{ Form::label('numero', 'Numero:') }}
                {{ Form::input('number', 'numero', null, ['placeholder'=>'número']) }}
            </div>
            <div class="col-md-4">
                {{ Form::label('nombre', 'Nombre:') }}
                {{ Form::text('nombre') }}
            </div>
            <div class="col-md-2">
                {{ Form::label('zona', 'Zona:') }}
                {{ Form::select('zona', $zonas, null, ['class'=>'select']) }}
            </div>
            <div class="col-md-4">
                {{ Form::label('departamento', 'Departamento:') }}
                {{ Form::select('departamento', $departamentos, null, ['class'=>'form']) }}
            </div>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-input col-md-10">
        <div class="row">
            <div class="col-md-3">
                {{ Form::label('presidente', 'Presidente:') }}
                {{ Form::text('presidente') }}
            </div>
            <div class="col-md-3">
             {{ Form::label('secretario', 'Secretario:') }}
             {{ Form::text('secretario') }}
         </div>
         <div class="col-md-3">
            {{ Form::label('secretarioadjunto', 'Secretario Adjunto:') }}
            {{ Form::text('secretarioadjunto') }}
        </div>
        <div class="col-md-3">
            {{ Form::label('tesorero', 'Tesorero:') }}
            {{ Form::text('tesorero') }}
        </div>
    </div>
</div>
</div>

<div class="form-row">
    <div class="form-input col-md-4"></div>
    {{ Form::submit('Actualizar', array('class' => 'form-input col-md-2 btn medium bg-blue')) }}
    <div class="form-input col-md-2">
        <a href="{{url('consorcios')}}" class="btn medium bg-yellow" title="">
            <span class="button-content">Cancelar</span>
        </a>
    </div>
    <div class="form-input col-md-4"></div>
</div>

{{ Form::close() }}

@if ($errors->any())
<div class="infobox infobox-close-wrapper warning-bg mrg0A">
    <a href="#" title="Close Message" class="glyph-icon infobox-close icon-remove"></a>
    <div class="bg-orange large btn info-icon">
        <i class="glyph-icon icon-warning-sign"></i>
    </div>
    <h4 class="infobox-title">Error al rellenar el formulario</h4>
    <ul>{{ implode('', $errors->all('<li class="error">:message</li>')) }}</ul>
</div>
@endif

@stop
