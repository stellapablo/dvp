@extends('layouts.scaffold')
@section('title', 'Estados del Camino')
@section('main')

<a href="{{url('estadocaminos','create')}}" class="btn medium bg-blue-alt" title="">
	<span class="button-content">Agregar</span>
</a>
<br><br>

@if ($estadocaminos->count())
<table class="table" id="example1">
	<thead>
		<tr>
			<th>Nombre</th>
			<th></th>
		</tr>
	</thead>

	<tbody>
		@foreach ($estadocaminos as $estadocamino)
		<tr>
			<td>{{{ $estadocamino->nombre }}}</td>
			<td>
				<a href="{{url('estadocaminos/'.$estadocamino->id.'/edit')}}" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Editar">
					<i class="glyph-icon icon-edit"></i>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
There are no estadocaminos
@endif

@stop
