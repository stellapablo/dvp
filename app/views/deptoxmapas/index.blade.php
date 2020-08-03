@extends('layouts.scaffold')

@section('main')

<h1>All Deptoxmapas</h1>

<p>{{ link_to_route('deptoxmapas.create', 'Add new deptoxmapa') }}</p>

@if ($deptoxmapas->count())
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Mapa</th>
			<th>Departamento</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($deptoxmapas as $deptoxmapa)
		<tr>
			<td>{{{ $deptoxmapa->mapa }}}</td>
			<td>{{{ $deptoxmapa->departamento }}}</td>
			<td>{{ link_to_route('deptoxmapas.edit', 'Edit', array($deptoxmapa->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('deptoxmapas.destroy', $deptoxmapa->id))) }}
				{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
There are no deptoxmapas
@endif

@stop
