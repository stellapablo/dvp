@extends('sigvial.master')
@section('title','SIGVIAL')
@section('content')

<div class="row">
	<div class="col-sm-9">
		<div class="row float-width sec-cont3">
			<iframe width="100%" height="450" scrolling="no" frameborder="0" src="{{url('mapainteractivos/index.html')}}" target="_top"> </iframe>
		</div>
		<div >
			<div class="qk-slider float-width">
				<h3 class="sldr-title">MAPAS QUE CONTIENEN TODAS LAS ZONAS</h3>
				<div class="flexslider news-sldr">                  
					<div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1600%; -webkit-transition: 0s; transition: 0s; -webkit-transform: translate3d(0px, 0px, 0px); transform: translate3d(0px, 0px, 0px);">
						@foreach($mapas as $mapa)
						<li style="width: 183px; float: left; display: block;">
							<div class="trans2 slide-sngl">
								<a class="text-center" href="{{url('/sigvial/mapadigital',$mapa->id)}}">
									<img alt="" src="{{url('img/iconos/'.Tipomapa::find($mapa->tipo)->icono.'.png')}}" draggable="false">
								</a>
								<h4 align="center"><a href="{{url('/sigvial/mapadigital',$mapa->id)}}">{{strtoupper($mapa->nombre)}}</a></h4>
							</div>
						</li>     
						@endforeach                
					</ul>
				</div><ul class="flex-direction-nav"><li><a class="flex-prev" href="#"></a></li><li><a class="flex-next" href="#"></a></li></ul>
			</div>
		</div>
	</div>
</div>
<div class="col-sm-3">	
	<div class="row float-width sec-cont3">
		<h3 class="sec-title">MAPAS POR ZONA</h3>
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="panel-title">
						<a href="#">ZONA 1: MAKALLE</a>
						<a class="accor-arw arw-up righty"></a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse">
					<div class="panel-body">
						<ul>
							@foreach ($consorciosZona1 as $mapa)
							<p>
								<a href="{{url('sigvial/mapadigital',$mapa->id)}}">
									{{HTML::image('img/sigvial/iconos/'.Tipomapa::find($mapa->tipo)->icono.'.png', 'imagen',['style'=>'width:30px'])}}
									{{$mapa->nombre}}
								</a>
							</p>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="panel-title">
						<a href="#">ZONA 2: SÁENZ PEÑA</a>
						<a class="accor-arw arw-up righty"></a>
					</h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse">
					<div class="panel-body">
						@foreach ($consorciosZona2 as $mapa)
						<p>
							<a href="{{url('sigvial/mapadigital',$mapa->id)}}">
								{{HTML::image('img/sigvial/iconos/'.Tipomapa::find($mapa->tipo)->icono.'.png', 'imagen',['style'=>'width:30px'])}}
								{{$mapa->nombre}}
							</a>
						</p>
						@endforeach
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4  data-toggle="collapse" data-parent="#accordion" href="#collapseTrhee" class="panel-title">
						<a href="#">ZONA 3: VILLA ÁNGELA</a>
						<a class="accor-arw arw-up righty"></a>
					</h4>
				</div>
				<div id="collapseTrhee" class="panel-collapse collapse">
					<div class="panel-body">
						@foreach ($consorciosZona3 as $mapa)
						<p>
							<a href="{{url('sigvial/mapadigital',$mapa->id)}}">
								{{HTML::image('img/sigvial/iconos/'.Tipomapa::find($mapa->tipo)->icono.'.png', 'imagen',['style'=>'width:30px'])}}
								{{$mapa->nombre}}
							</a>
						</p>
						@endforeach
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4  data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="panel-title">
						<a href="#">ZONA 4: CASTELLI</a>
						<a class="accor-arw arw-up righty"></a>
					</h4>
				</div>
				<div id="collapseFour" class="panel-collapse collapse">
					<div class="panel-body">
						@foreach ($consorciosZona4 as $mapa)
						<p>
							<a href="{{url('sigvial/mapadigital',$mapa->id)}}">
								{{HTML::image('img/sigvial/iconos/'.Tipomapa::find($mapa->tipo)->icono.'.png', 'imagen',['style'=>'width:30px'])}}
								{{$mapa->nombre}}
							</a>
						</p>
						@endforeach
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4  data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="panel-title">
						<a href="#">ZONA 5: SAN MARTÍN</a>
						<a class="accor-arw arw-up righty"></a>
					</h4>
				</div>
				<div id="collapseFive" class="panel-collapse collapse">
					<div class="panel-body">
						@foreach ($consorciosZona5 as $mapa)
						<p>
							<a href="{{url('sigvial/mapadigital',$mapa->id)}}">
								{{HTML::image('img/sigvial/iconos/'.Tipomapa::find($mapa->tipo)->icono.'.png', 'imagen',['style'=>'width:30px'])}}
								{{$mapa->nombre}}
							</a>
						</p>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row float-width sec-cont3">
		<h3 class="sec-title">TIPOS DE MAPAS</h3>
		<div class="row">
			@foreach($tiposDeMapas as $tipoMapa)
			<a href="{{url('/sigvial/filtrarMapas',$tipoMapa->id)}}">
				<div class="col-sm-3">
					{{HTML::image('img/iconos/'.$tipoMapa->icono.'.png', 'imagen',['style'=>'width:50px'])}}
				</div>
				<div class="col-sm-8">
					<h3>{{strtoupper($tipoMapa->nombre)}}</h3>
				</div>
			</a>
			@endforeach
		</div>
	</div>
</div>
</div>


@stop