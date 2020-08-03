@extends('layouts.scaffold')
@section('title','Usuario: '.$user->nick)
@section('main')

<h3>
	@if($user->rol == 1)
	Administrador
	@endif
	@if($user->rol == 2)
	Mapas y consorcios
	@endif
	@if($user->rol == 3)
	Estados de los Caminos
	@endif
</h3>
<h3>Nivel: {{$user->rol}}</h3>
<br><br>
<a href="{{url('users/'.$user->id.'/edit')}}" class="btn medium bg-blue-alt" title="">
	<span class="button-content">Editar mis Datos</span>
</a>


@stop
