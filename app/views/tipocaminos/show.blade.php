@extends('layouts.scaffold')

@section('main')

<h1>Show Tipocamino</h1>

<p>{{ link_to_route('tipocaminos.index', 'Return to all tipocaminos') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Nombre</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $tipocamino->nombre }}}</td>
			<td>{{ link_to_route('tipocaminos.edit', 'Edit', array($tipocamino->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('tipocaminos.destroy', $tipocamino->id))) }}
				{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
