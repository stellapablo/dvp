@extends('sigvial.master')
@section('title','Mapas')
@section('main')

<div class="row">
	<div class="col-sm-3">
		<div class="row float-width sec-cont3">
			<h3 class="sec-title">tipos de mapas</h3>	
			<div class="row">
				@foreach($tiposDeMapas as $tipoMapa)
				<a href="{{url('/sigvial/filtrarMapas',$tipoMapa->id)}}">
					<div class="col-sm-3">
						{{HTML::image('img/iconos/'.$tipoMapa->icono.'.png', 'imagen',['style'=>'width:50px'])}}
					</div>
					<div class="col-sm-9">
						<h4>{{$tipoMapa->nombre}}</h4>
					</div>
				</a>
				@endforeach
			</div>
		</div>
		<div class="row float-width sec-cont3">
			<h3 class="sec-title">POR DEPARTAMENTO</h3>	
			{{ Form::open(array('url' => 'sigvial/filtrarMapasPorDepartamento')) }}		
			<div class="row">
				<div class="col-md-8">
					{{ Form::select('departamento', $departamentos, null, ['class'=>'cust-slctr hasCustomSelect']) }}
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-3">
					{{ Form::submit('Ver', array('class' => 'col-md-12 btn medium bg-blue')) }}
				</div>
			</div>
			{{ Form::close() }}
		</div>
		<div class="row float-width sec-cont3">
			<h3 class="sec-title">POR CONSORCIO</h3>	
			{{ Form::open(array('url' => 'sigvial/filtrarMapasPorConsorcio')) }}			
			<div class="row">
				<div class="col-md-8">
					{{ Form::select('consorcios', $consorcios, null, ['class'=>'cust-slctr hasCustomSelect']) }}
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-3">
					{{ Form::submit('Ver', array('class' => 'col-md-12 btn medium bg-blue')) }}
				</div>
			</div>
			{{ Form::close() }}
		</div>
		<div class="row float-width sec-cont3">
			<h3 class="sec-title">Por zona</h3>	
			<ul>
				<li><a href="{{url('/sigvial/mapasZona/1')}}">ZONA I</a></li>
				<li><a href="{{url('/sigvial/mapasZona/2')}}">ZONA II</a></li>
				<li><a href="{{url('/sigvial/mapasZona/3')}}">ZONA III</a></li>
				<li><a href="{{url('/sigvial/mapasZona/4')}}">ZONA IV</a></li>
				<li><a href="{{url('/sigvial/mapasZona/5')}}">ZONA V</a></li>
			</ul>
		</div>
	</div>
	<div class="col-sm-9">
		<div class="row float-width sec-cont3">
			@if ($mapas->count())
			<table class="table">
				@foreach ($mapas as $mapa)
				<tr>
					<td width="8%">{{HTML::image('img/iconos/'.Tipomapa::find($mapa->tipo)->icono.'.png', 'imagen',['style'=>'width:100%'])}}</td>
					<td width="40%"><a href="{{url('/sigvial/mapadigital',$mapa->id)}}"><h4 class="listado">{{{ strtoupper($mapa->nombre) }}}</h4></a></td>
					<td width="20%"><h4 class="listado">{{{ Tipomapa::find($mapa->tipo)->nombre }}}</h4></td>
					<td width="12%"><h4 class="listado">{{number_format($mapa->tamanio/(1000000),2)}} MB</h4></td>
					<td>
						<a href="{{url('/sigvial/mapadigital',$mapa->id)}}" title="Tutorial"><img src="{{ asset('img/tuto.png') }}" width="15%" /></a>
						<a href="{{url('mapas/'.$mapa->id.'/edit')}}" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Editar">
							<i class="glyph-icon icon-edit"></i>
						</a>
						<a href="{{{url('repositoriomapas',$mapa->archivo)}}}" target="_new" title="Descargar"><img src="{{ asset('img/download.png') }}" width="15%" /></a>
					</td>
				</tr>
				@endforeach
			</table>
			@else
			No hay mapas cargados
			@endif
			<div class="col-sm-4"></div>
			<div class="col-sm-4">{{$mapas->links()}}</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</div>

@stop