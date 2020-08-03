@extends('layouts.scaffold')

@section('main')

<h1>Edit Deptoxmapa</h1>
{{ Form::model($deptoxmapa, array('method' => 'PATCH', 'route' => array('deptoxmapas.update', $deptoxmapa->id))) }}
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
			{{ link_to_route('deptoxmapas.show', 'Cancel', $deptoxmapa->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
