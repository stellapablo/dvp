@extends('layouts.scaffold')

@section('main')

<h1>All Mapaxzonas</h1>

<p>{{ link_to_route('mapaxzonas.create', 'Add new mapaxzona') }}</p>

@if ($mapaxzonas->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Mapa</th>
				<th>Zona</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($mapaxzonas as $mapaxzona)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no mapaxzonas
@endif

@stop
