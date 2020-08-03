@extends('layouts.scaffold')

@section('main')

<h1>Show Mapa</h1>

<p>{{ link_to_route('mapas.index', 'Return to all mapas') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Archivo</th>
			<th>Descripcion</th>
			<th>Tipo</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $mapa->nombre }}}</td>
			<td>{{{ $mapa->archivo }}}</td>
			<td>{{{ $mapa->descripcion }}}</td>
			<td>{{{ $mapa->tipo }}}</td>
			<td>{{ link_to_route('mapas.edit', 'Edit', array($mapa->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('mapas.destroy', $mapa->id))) }}
				{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
