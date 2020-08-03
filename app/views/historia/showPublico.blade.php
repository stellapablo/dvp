@extends('sigvial.master')
@section('title',$historium->titulo)
@section('main')

<?php $fecha = New DateTime($historium->fecha);?>
<div class="row">
	<div class="col-sm-2"> 	<a href="{{url('sigvial/historiasigvial',$historium->id)}}"> << LÍNEA DE TIEMPO </a></div>
	<div class="col-sm-6">{{date_format($fecha,'d/m/Y')}}</div>
</div>
<h1>{{$historium->titulo}}</h1>
<div class="row">
	<div class="col-sm-5">
	@if($historium->foto != null)
		{{HTML::image('imghistoria/'.$historium->foto, 'imagen', ['width'=>'100%'])}}
	@else
		{{HTML::image('imghistoria/ejemplo01.png', 'imagen', ['width'=>'100%'])}}
	@endif
	</div>
	<div class="col-sm-7">		
		{{$historium->descripcion}}
		</div>

	</div>
</div>

@stop
