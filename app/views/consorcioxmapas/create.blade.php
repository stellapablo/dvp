@extends('layouts.scaffold')

@section('main')

<h1>Create Consorcioxmapa</h1>

{{ Form::open(array('route' => 'consorcioxmapas.store')) }}
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


