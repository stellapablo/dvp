@extends('layouts.scaffold')
@section('title', 'Tipode de caminos')
@section('main')

<a href="{{url('tipocaminos','create')}}" class="btn medium bg-blue-alt" title="">
	<span class="button-content">Agregar</span>
</a>
<br><br>

@if ($tipocaminos->count())
<table class="table" id="example1">
	<thead>
		<tr>
			<th>Nombre</th>
			<th></th>
		</tr>
	</thead>

	<tbody>
		@foreach ($tipocaminos as $tipocamino)
		<tr>
			<td>{{{ $tipocamino->nombre }}}</td>
			<td>
				<a href="{{url('tipocaminos/'.$tipocamino->id.'/edit')}}" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Editar">
					<i class="glyph-icon icon-edit"></i>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
There are no tipocaminos
@endif

@stop
