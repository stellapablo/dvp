@extends('layouts.scaffold')
@section('title','Historia de SIGVIAL')
@section('main')

<a href="{{url('historia','create')}}" class="btn medium bg-blue-alt" title="">
	<span class="button-content">Agregar</span>
</a>
<br><br>

@if ($historia->count())
<table class="table" id="example1">
	<thead>
		<tr>
			<th>#</th>
			<th>Fecha</th>
			<th>Titulo</th>
			<th></th>
		</tr>
	</thead>

	<tbody>
		@foreach ($historia as $historium)
		<tr>
			<td>{{{ $historium->id }}}</td>
			<td>
				<?php 
				$fecha = New DateTime($historium->fecha);
				?>
				{{ date_format($fecha,'d/m/Y') }}
			</td>
			<td>{{{ $historium->titulo }}}</td>
			<td>
				<a href="{{url('historia/'.$historium->id)}}" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Editar">
					<i class="glyph-icon icon-edit"></i>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
There are no historia
@endif

@stop
