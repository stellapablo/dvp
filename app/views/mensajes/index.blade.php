@extends('layouts.scaffold')
@section('title','Mensajes')
@section('main')

@if ($mensajes->count())
<table class="table" id="example1">
	<thead>
		<tr>
			<th>Mapa</th>
			<th>Dni</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>Mensaje</th>
			<th></th>
		</tr>
	</thead>

	<tbody>
		@foreach ($mensajes as $mensaje)
		<tr>
			<td>
				@if(isset(Mapa::find($mensaje->mapa)->nombre))
				<a href="{{url('sigvial/mapadigital', $mensaje->mapa)}}" target="_new">{{ Mapa::find($mensaje->mapa)->nombre }}</a>
				@else
				MAPA ELIMINADO
				@endif
			</td>
			<td>{{{ $mensaje->dni }}}</td>
			<td>{{{ $mensaje->nombre }}}</td>
			<td>{{{ $mensaje->apellido }}}</td>
			<td>{{{ $mensaje->email }}}</td>
			<td>{{{ substr($mensaje->mensaje, 0, 40) }}}...</td>
			<td>{{ link_to_route('mensajes.show', 'Ver', array($mensaje->id), array('class' => 'btn btn-info')) }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
No hay mensajes
@endif

@stop
