@extends('layouts.scaffold')

@section('main')

<h1>Edit Consorcioxmapa</h1>
{{ Form::model($consorcioxmapa, array('method' => 'PATCH', 'route' => array('consorcioxmapas.update', $consorcioxmapa->id))) }}
	<ul>
        <li>
            {{ Form::label('mapa', 'Mapa:') }}
            {{ Form::input('number', 'mapa') }}
        </li>

        <li>
            {{ Form::label('consorcio', 'Consorcio:') }}
            {{ Form::input('number', 'consorcio') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('consorcioxmapas.show', 'Cancel', $consorcioxmapa->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
