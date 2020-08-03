@extends('layouts.scaffold')
@section('title','Tipos de Mapas')
@section('main')

<a href="{{url('tipomapas','create')}}" class="btn medium bg-blue-alt" title="">
	<span class="button-content">Agregar</span>
</a>
<br><br>

@if ($tipomapas->count())
<table class="table" id="example1">
	<thead>
		<tr>
			<th>Nombre</th>
			<th></th>
		</tr>
	</thead>

	<tbody>
		@foreach ($tipomapas as $tipomapa)
		<tr>
			<td>{{{ $tipomapa->nombre }}}</td>
			<td>
				<a href="{{url('tipomapas/'.$tipomapa->id.'/edit')}}" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Editar">
					<i class="glyph-icon icon-edit"></i>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
There are no tipomapas
@endif

@stop
