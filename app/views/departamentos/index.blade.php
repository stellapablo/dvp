@extends('layouts.scaffold')

@section('main')

<h1>Departametnos</h1>

<a href="{{url('departamentos','create')}}" class="btn vertical-button hover-orange" title="">
	<span class="glyph-icon icon-separator-vertical pad0A medium">
		<i class="glyph-icon icon-plus-sign opacity-80 font-size-20"></i>
	</span>
	<span class="button-content">Nuevo Departamento</span>
</a>
<div class="divider"></div>
@if ($departamentos->count())
<table class="table table-striped">
	<tbody>
		@foreach ($departamentos as $departamento)
		<tr>
			<td>{{{ $departamento->nombre }}}</td>
			<td>
				<div class="dropdown">
					<a href="javascript:;" title="" class="btn medium bg-blue" data-toggle="dropdown">
						<span class="button-content">
							<i class="glyph-icon font-size-11 icon-cog"></i>
							<i class="glyph-icon font-size-11 icon-chevron-down"></i>
						</span>
					</a>
					<ul class="dropdown-menu float-right">
						<li>
						{{ link_to_route('departamentos.edit', 'Editar', array($departamento->id), array('class' => 'glyph-icon icon-edit mrg5R')) }}
						</li>	
						<li>
							{{ Form::open(array('method' => 'DELETE', 'route' => array('departamentos.destroy', $departamento->id))) }}
							{{ Form::submit('Elimianr', array('class' => 'btn btn-danger')) }}
							{{ Form::close() }}
						</li>
					</ul>
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
There are no departamentos
@endif

@stop
