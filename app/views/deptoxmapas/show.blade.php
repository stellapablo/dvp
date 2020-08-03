@extends('layouts.scaffold')

@section('main')

<h1>Show Deptoxmapa</h1>

<p>{{ link_to_route('deptoxmapas.index', 'Return to all deptoxmapas') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Mapa</th>
				<th>Departamento</th>
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop