@extends('layouts.scaffold')

@section('main')

<h1>Editar Zona</h1>

<div class="divider"></div>

{{ Form::model($zona, array('method' => 'PATCH', 'route' => array('zonas.update', $zona->id),'class'=>'form col-md-6')) }}
<div class="form-row">
	{{ Form::label('numero', 'Numero:',['class'=>'form-label col-md-2']) }}
	{{ Form::input('number', 'numero',null,['class'=>'form-label col-md-5']) }}
	{{ Form::submit('Actualizar', array('class' => 'btn col-md-2')) }}
	{{ link_to_route('zonas.index', 'Cancelar',array('class' => 'btn')) }}
</div>
{{ Form::close() }}

@if ($errors->any())
<ul>
	{{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop
