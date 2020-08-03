@extends('layouts.base')

@section('main')

<div class="col-sm-5">

	@if (Session::has('message'))
	<div class="flash alert">
		<p>{{ Session::get('message') }}</p>
	</div>
	@endif

	<h3>Acceso al sistema</h3>
	<div class="panel-body">
		{{ Form::open(array('route' => 'users.login','class'=>'form-signin')) }}
		<input type="input" name="email" autofocus="" required="" placeholder="nombre de usuario" class="form-control">
	</br>
	<input type="password" name="password" required="" placeholder="Contraseña" class="form-control">
</br>


<button type="submit" class="btn btn-block">Ingresar</button>

{{Form::close()}}
</div>
</div>

@stop
