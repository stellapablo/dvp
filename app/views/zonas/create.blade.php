@extends('layouts.scaffold')
@yield('title')
@section('main')

<h1>Nueva Zona</h1>

{{ Form::open(array('route' => 'zonas.store', 'class'=>'form col-md-4')) }}

{{ Form::label('numero', 'Numero:') }}
{{ Form::input('number', 'numero') }}
{{ Form::submit('Guardar', array('class' => 'btn')) }}
{{ Form::close() }}

@if ($errors->any())
<ul>
	{{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop

