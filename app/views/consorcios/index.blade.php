@extends('layouts.scaffold')
@section('title','Consorcios Camineros')
@section('main')

<a href="{{url('consorcios','create')}}" class="btn medium bg-blue-alt" title="">
	<span class="button-content">Agregar</span>
</a>
<br><br>

<table class="table" id="example1">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Zona</th>
			<th>Departamento</th>
			<th></th>
		</tr>
	</thead>

	<tbody>
		@foreach ($consorcios as $consorcio)
		<tr>
			<td>{{{ $consorcio->numero }}}</td>
			<td>{{{ $consorcio->nombre }}}</td>
			<td>{{{ $consorcio->zona }}}</td>
			<td>{{{ Departamento::find($consorcio->departamento)->nombre }}}</td>
			<td>
				<a href="{{url('consorcios',$consorcio->id)}}" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Editar">
					<i class="glyph-icon icon-edit"></i>
				</a>
			</td>			
		</tr>
		@endforeach
	</tbody>
</table>

@stop
