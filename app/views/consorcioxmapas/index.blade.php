@extends('layouts.scaffold')

@section('main')

<h1>All Consorcioxmapas</h1>

<p>{{ link_to_route('consorcioxmapas.create', 'Add new consorcioxmapa') }}</p>

@if ($consorcioxmapas->count())
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Mapa</th>
			<th>Consorcio</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($consorcioxmapas as $consorcioxmapa)
		<tr>
			<td>{{{ $consorcioxmapa->mapa }}}</td>
			<td>{{{ $consorcioxmapa->consorcio }}}</td>
			<td>{{ link_to_route('consorcioxmapas.edit', 'Edit', array($consorcioxmapa->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('consorcioxmapas.destroy', $consorcioxmapa->id))) }}
				{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
There are no consorcioxmapas
@endif

@stop
