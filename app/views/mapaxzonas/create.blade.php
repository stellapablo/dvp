@extends('layouts.scaffold')

@section('main')

<h1>Create Mapaxzona</h1>

{{ Form::open(array('route' => 'mapaxzonas.store')) }}
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
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


