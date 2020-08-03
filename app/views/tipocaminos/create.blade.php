@extends('layouts.scaffold')
@section('title', 'Nuevo Tipo de Camino')
@section('main')

{{ Form::open(array('route' => 'tipocaminos.store')) }}

<div class="form-row">
	<div class="form-input col-md-9">
		<div class="row">
			<div class="col-md-4">
				{{ Form::label('nombre', 'Nombre:') }}
				{{ Form::text('nombre') }}				
			</div>
		</div>
	</div>
</div>

<div class="form-row">
	<div class="form-input col-md-1"></div>
	{{ Form::submit('Guardar', array('class' => 'form-input col-md-1 btn medium bg-blue')) }}
	<div class="form-input col-md-4"></div>
</div>

{{ Form::close() }}

@if ($errors->any())
<ul>
	{{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop


