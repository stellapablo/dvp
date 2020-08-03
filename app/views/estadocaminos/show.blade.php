@extends('layouts.scaffold')

@section('main')

<h1>Show Estadocamino</h1>

<p>{{ link_to_route('estadocaminos.index', 'Return to all estadocaminos') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Nombre</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $estadocamino->nombre }}}</td>
                    <td>{{ link_to_route('estadocaminos.edit', 'Edit', array($estadocamino->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('estadocaminos.destroy', $estadocamino->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
