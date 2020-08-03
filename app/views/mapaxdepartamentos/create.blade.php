@extends('layouts.scaffold')

@section('main')

<h1>Create Mapaxdepartamento</h1>

{{ Form::open(array('route' => 'mapaxdepartamentos.store')) }}
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


