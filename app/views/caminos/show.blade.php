@extends('layouts.scaffold')

@section('main')

<h1>Show Camino</h1>

<p>{{ link_to_route('caminos.index', 'Return to all caminos') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Nombre</th>
				<th>Tipo</th>
				<th>Estado</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $camino->nombre }}}</td>
					<td>{{{ $camino->tipo }}}</td>
					<td>{{{ $camino->estado }}}</td>
                    <td>{{ link_to_route('caminos.edit', 'Edit', array($camino->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('caminos.destroy', $camino->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
