@extends('layouts.scaffold')

@section('main')

<h1>Show Mapaxzona</h1>

<p>{{ link_to_route('mapaxzonas.index', 'Return to all mapaxzonas') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Mapa</th>
				<th>Zona</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $mapaxzona->mapa }}}</td>
					<td>{{{ $mapaxzona->zona }}}</td>
                    <td>{{ link_to_route('mapaxzonas.edit', 'Edit', array($mapaxzona->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('mapaxzonas.destroy', $mapaxzona->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
