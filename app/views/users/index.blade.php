@extends('layouts.scaffold')
@section('title','Usuarios')
@section('main')

<a href="{{url('users','create')}}" class="btn medium bg-blue-alt" title="">
	<span class="button-content">Agregar</span>
</a>
<br><br>

@if ($users->count())
<table class="table" id="example1">
	<thead>
		<tr>
			<th>Nick</th>
			<th>Rol</th>
			<th width="20%"></th>
		</tr>
	</thead>

	<tbody>
		@foreach ($users as $user)
		<tr>
			<td>{{{ $user->nick }}}</td>
			<td>
			@if($user->rol == 1)
			Administrador
			@endif
			@if($user->rol == 2)
			Mapas y consorcios
			@endif
			@if($user->rol == 3)
			Noticias
			@endif
				@if($user->rol == 4)
					Alertas
				@endif
			</td>
			<td>
				<a href="{{url('users/'.$user->id.'/edit')}}" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Editar">
					<i class="glyph-icon icon-edit"></i>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
There are no users
@endif

@stop
