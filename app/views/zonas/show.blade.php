@extends('layouts.scaffold')

@section('main')

<h1>Show Zona</h1>

<p>{{ link_to_route('zonas.index', 'Return to all zonas') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Numero</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $zona->numero }}}</td>
                    <td>{{ link_to_route('zonas.edit', 'Edit', array($zona->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('zonas.destroy', $zona->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
