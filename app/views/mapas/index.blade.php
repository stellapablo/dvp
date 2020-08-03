@extends('layouts.scaffold')
@section('title','Mapas')
@section('main')

<a href="{{url('mapas','create')}}" class="btn medium bg-blue-alt" title="">
	<span class="button-content">Agregar</span>
</a>
<br><br>

@if ($mapas->count())
<table class="table" id="example1">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Archivo</th>
			<th>Descripcion</th>
			<th>Tamaño</th>
			<th>Tipo</th>
			<th></th>
			<th></th>
		</tr>
	</thead>

	<tbody>
		@foreach ($mapas as $mapa)
		<tr>
			<td>{{{ $mapa->nombre }}}</td>
			<td>{{{ $mapa->archivo }}}</td>
			<td>{{{ $mapa->descripcion }}}</td>
			<td>
			<td>{{number_format($mapa->tamanio/(1000000),2)}} MB</td>
			<td>
			@if(isset(Tipomapa::find($mapa->tipo)->nombre))
			{{ Tipomapa::find($mapa->tipo)->nombre }}
			@else
			TIPO ELIMINADO
			@endif
			</td>
			<td>
				<a href="{{url('mapas/'.$mapa->id.'/edit')}}" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Editar">
					<i class="glyph-icon icon-edit"></i>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@else
There are no mapas
@endif

@stop
