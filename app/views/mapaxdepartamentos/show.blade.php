@extends('layouts.scaffold')

@section('main')

<h1>Show Mapaxdepartamento</h1>

<p>{{ link_to_route('mapaxdepartamentos.index', 'Return to all mapaxdepartamentos') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Mapa</th>
				<th>Departamento</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $mapaxdepartamento->mapa }}}</td>
					<td>{{{ $mapaxdepartamento->departamento }}}</td>
                    <td>{{ link_to_route('mapaxdepartamentos.edit', 'Edit', array($mapaxdepartamento->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('mapaxdepartamentos.destroy', $mapaxdepartamento->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
