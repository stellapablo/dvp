@extends('layouts.scaffold')

@section('main')

<h1>Edit Mensaje</h1>
{{ Form::model($mensaje, array('method' => 'PATCH', 'route' => array('mensajes.update', $mensaje->id))) }}
	<ul>
        <li>
            {{ Form::label('mapa', 'Mapa:') }}
            {{ Form::input('number', 'mapa') }}
        </li>

        <li>
            {{ Form::label('dni', 'Dni:') }}
            {{ Form::input('number', 'dni') }}
        </li>

        <li>
            {{ Form::label('nombre', 'Nombre:') }}
            {{ Form::text('nombre') }}
        </li>

        <li>
            {{ Form::label('apellido', 'Apellido:') }}
            {{ Form::text('apellido') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('mensaje', 'Mensaje:') }}
            {{ Form::textarea('mensaje') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('mensajes.show', 'Cancel', $mensaje->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
