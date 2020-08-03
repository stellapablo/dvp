@extends('layouts.scaffold')
@section('title','Editar Estado de caminos o puentes')
@section('main')

{{ Form::model($estadocamino, array('method' => 'PATCH', 'route' => array('estadocaminos.update', $estadocamino->id))) }}
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

<div class="form-row col-md-5">
	<div class="form-input col-md-1"></div>
	{{ Form::submit('Actualizar', array('class' => 'form-input col-md-2 btn medium bg-blue')) }}
	<div class="form-input col-md-1"></div>
	{{ link_to_route('estadocaminos.index', 'Cancel', null, array('class' => 'form-input col-md-2 btn medium bg-yellow')) }}
	{{ Form::close() }}
	<div class="form-input col-md-1"></div>
	{{ Form::open(array('method' => 'DELETE', 'route' => array('estadocaminos.destroy', $estadocamino->id))) }}
	{{ Form::submit('Eliminar', array('class' => 'form-input col-md-2 btn medium bg-red')) }}
	{{ Form::close() }}
</div>
</div>

@if ($errors->any())
<ul>
	{{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop
