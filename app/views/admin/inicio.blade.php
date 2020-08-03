@extends('layouts.scaffold')
@section('title','Panel de Administración')
@section('main')
<br>
<br>
<br>
<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<div class="row">
			<div class="col-sm-2">
			{{HTML::image('img/logoviejo.png', 'imagen',['style'=>'width:100%'])}}
			</div>
			<div class="col-sm-10">
				<h1>DIRECCIÓN DE VIALIDAD PROVINCIAL</h1>
				<h2>PROVINCIA DEL CHACO</h2>
			</div>
		</div>				
	</div>
	<div class="col-sm-2"></div>
</div>

@stop
