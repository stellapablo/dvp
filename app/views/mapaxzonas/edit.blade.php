@extends('layouts.scaffold')

@section('main')

<h1>Edit Mapaxzona</h1>
{{ Form::model($mapaxzona, array('method' => 'PATCH', 'route' => array('mapaxzonas.update', $mapaxzona->id))) }}
	<ul>
        <li>
            {{ Form::label('mapa', 'Mapa:') }}
            {{ Form::input('number', 'mapa') }}
        </li>

        <li>
            {{ Form::label('zona', 'Zona:') }}
            {{ Form::input('number', 'zona') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('mapaxzonas.show', 'Cancel', $mapaxzona->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
