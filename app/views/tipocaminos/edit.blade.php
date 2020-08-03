@extends('layouts.scaffold')
@section('title', 'Editar tipo de Camino')
@section('main')

{{ Form::model($tipocamino, array('method' => 'PATCH', 'route' => array('tipocaminos.update', $tipocamino->id))) }}

<div class="form-row">
	<div class="form-input col-md-9">
		<div class="row">
			<div class="col-md-5">
				{{ Form::label('nombre', 'Nombre:') }}
				{{ Form::text('nombre') }}				
			</div>
		</div>
	</div>
</div>

<div class="form-row col-md-5">
	<div class="form-input col-md-1"></div>
	{{ Form::submit('Actualizar', array('class' => 'form-input col-md-2 btn medium bg-blue')) }}
	<div class="form-input col-md-1"></div>
	{{ link_to_route('tipocaminos.index', 'Cancel', null, array('class' => 'form-input col-md-2 btn medium bg-yellow')) }}
	{{ Form::close() }}
	<div class="form-input col-md-1"></div>
	{{ Form::open(array('method' => 'DELETE', 'route' => array('tipocaminos.destroy', $tipocamino->id))) }}
	{{ Form::submit('Eliminar', array('class' => 'form-input col-md-2 btn medium bg-red')) }}
	{{ Form::close() }}
</div>

@if ($errors->any())
<ul>
	{{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop
