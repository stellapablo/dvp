@extends('layouts.scaffold')

@section('main')

<h1>Edit Mapaxdepartamento</h1>
{{ Form::model($mapaxdepartamento, array('method' => 'PATCH', 'route' => array('mapaxdepartamentos.update', $mapaxdepartamento->id))) }}
	<ul>
        <li>
            {{ Form::label('mapa', 'Mapa:') }}
            {{ Form::input('number', 'mapa') }}
        </li>

        <li>
            {{ Form::label('departamento', 'Departamento:') }}
            {{ Form::input('number', 'departamento') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('mapaxdepartamentos.show', 'Cancel', $mapaxdepartamento->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
