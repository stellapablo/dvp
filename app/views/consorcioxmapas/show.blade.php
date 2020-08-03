@extends('layouts.scaffold')

@section('main')

<h1>Show Consorcioxmapa</h1>

<p>{{ link_to_route('consorcioxmapas.index', 'Return to all consorcioxmapas') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Mapa</th>
				<th>Consorcio</th>
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
