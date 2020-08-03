@extends('layouts.scaffold')
@section('title', $mensaje->apellido.', '.$mensaje->nombre.' ('.$mensaje->email.')')
@section('main')

<p><strong>Mapa: </strong>{{{ $mensaje->mapa }}}</p>
<p><strong>DNI Nº {{{ $mensaje->dni }}}</strong></p>
<p><strong>Apellifo y Nombre: </strong>{{{ $mensaje->apellido }}}, {{{ $mensaje->nombre }}}</p>
<p><strong>Email: </strong>{{{ $mensaje->email }}}</p>
<h3>Mensaje:</h3>
<p align="justify">{{ $mensaje->mensaje}}</p>

<br>
<br>
<div class="form-input col-md-4">
	{{ Form::open(array('method' => 'DELETE', 'route' => array('mensajes.destroy', $mensaje->id))) }}
	{{ Form::submit('Eliminar', array('class' => 'col-md-4 btn')) }}
	{{ Form::close() }}
</div>


@stop
