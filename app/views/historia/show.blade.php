@extends('layouts.scaffold')
@section('title',$historium->titulo)
@section('main')

<div class="row">
	<div class="col-sm-5">
	@if($historium->foto != null)
		{{HTML::image('imghistoria/'.$historium->foto, 'imagen', ['width'=>'100%'])}}
	@else
		{{HTML::image('imghistoria/ejemplo01.png', 'imagen', ['width'=>'100%'])}}
	@endif
	</div>
	<div class="col-sm-7">
		<?php $fecha = New DateTime($historium->fecha);?>
		<strong>Fecha:</strong> {{date_format($fecha,'d/m/Y')}} <br>
		<strong>Titulo: </strong>{{$historium->titulo}} <br>
		<strong>Descripción:</strong> <br> {{$historium->descripcion}} <br><br><br>
		
		<div class="form-row">
			<div class="form-input col-md-2"></div>
			{{ link_to_route('historia.edit', 'Editar', array($historium->id), array('class' => 'form-input col-md-2 btn medium bg-blue')) }}

			
			<div class="form-input col-md-1"></div>
			<a href="{{url('historia')}}" class="btn medium bg-blue-alt" title="">
				<span class="button-content">Listo</span>
			</a>
			{{ Form::close() }}

			<div class="form-input col-md-4"></div>
		</div>

	</div>
</div>

@stop
