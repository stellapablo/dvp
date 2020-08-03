@extends('layouts.scaffold')

@section('main')

<h1>All Mapaxdepartamentos</h1>

<p>{{ link_to_route('mapaxdepartamentos.create', 'Add new mapaxdepartamento') }}</p>

@if ($mapaxdepartamentos->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Mapa</th>
				<th>Departamento</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($mapaxdepartamentos as $mapaxdepartamento)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no mapaxdepartamentos
@endif

@stop
