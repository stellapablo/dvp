@extends('layouts.scaffold')

@section('main')

<h1>Zonas</h1>

<a href="{{url('zonas','create')}}" class="btn vertical-button hover-orange" title="">
	<span class="glyph-icon icon-separator-vertical pad0A medium">
		<i class="glyph-icon icon-plus-sign opacity-80 font-size-20"></i>
	</span>
	<span class="button-content">Nueva Zona</span>
</a>
<div class="divider"></div>
@if ($zonas->count())
<table class="table table-striped">
	<tbody>
		@foreach ($zonas as $zona)
		<tr>
			<td class="font-bold text-left">ZONA Nº {{{ $zona->numero }}}</td>
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
							{{ link_to_route('zonas.edit', 'Editar', array($zona->id), array('class' => 'glyph-icon icon-edit mrg5R')) }}
						</li>	
						<li>
							{{ Form::open(array('method' => 'DELETE', 'route' => array('zonas.destroy', $zona->id))) }}
							{{ Form::submit('Eliminar', array('class' => 'btn')) }}
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
There are no zonas
@endif

@stop

