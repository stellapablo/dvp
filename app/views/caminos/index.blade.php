@extends('layouts.scaffold')
@section('title','Caminos y Puentes')
@section('main')

<a href="{{url('caminos','create')}}" class="btn medium bg-blue-alt" title="">
	<span class="button-content">Agregar</span>
</a>
<br><br>

<table class="table" id="example1">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Estado</th>
			<th></th>
		</tr>
	</thead>

	<tbody>
		@foreach ($caminos as $camino)
		<tr>
			<td>{{{ $camino->nombre }}}</td>
			<td>
				@if(isset(Tipocamino::find($camino->tipo)->nombre))
				{{ Tipocamino::find($camino->tipo)->nombre }}
				@else
				no definido
				@endif
			</td>
			<td>
			@if(isset(Estadocamino::find($camino->estado)->nombre))
				{{{ Estadocamino::find($camino->estado)->nombre }}}
				@else
				no definido
				@endif			
			</td>
			<td>
				<a href="{{url('caminos/'.$camino->id.'/edit')}}" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Editar">
					<i class="glyph-icon icon-edit"></i>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@stop
