@extends('layouts.scaffold')
@section('title','Editar Tipo de mapa')
@section('main')

{{ Form::model($tipomapa, array('method' => 'PATCH', 'route' => array('tipomapas.update', $tipomapa->id))) }}
	<div class="form-row">
	<div class="form-input col-md-10">
		<div class="row">
			<div class="col-md-7">
				{{ Form::label('nombre', 'Nombre:') }}
				{{ Form::text('nombre') }}
				{{ Form::label('tutorial', 'Tutorial:') }}
				{{ Form::textarea('tutorial') }}
			</div>
		</div>
	</div>
</div>
<br>
<div class="form-row col-md-10">
	{{ Form::submit('Actualizar', array('class' => 'form-input col-md-1 btn medium bg-blue')) }}      
	<div class="form-input col-md-1"></div>
    {{ link_to_route('tipomapas.index', 'Cancelar', $tipomapa->id, array('class' => 'form-input col-md-1 btn medium bg-yellow')) }}
    {{ Form::close() }}

    <div class="form-input col-md-1"></div>
    {{ Form::open(array('method' => 'DELETE', 'route' => array('tipomapas.destroy', $tipomapa->id))) }}
    {{ Form::submit('Eliminar', array('class' => 'form-input col-md-1 btn medium bg-red')) }}
    {{ Form::close() }}
</div>

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
