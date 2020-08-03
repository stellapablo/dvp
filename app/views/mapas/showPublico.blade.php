@extends('sigvial.master')
@section('title',strtoupper($mapa->nombre))
@section('main')

<div class="container">
	<!-- Main Left side -->
	<div class="main-left-side">
		<!-- The Article -->
		<div class="row float-width sec-cont3">
			<div class="artcl-body float-width">
				<br>				
				<div class="row">
					<div class="col-sm-9">						
						<h2>{{strtoupper($mapa->nombre)}}</h2>
						<h5>{{ strtoupper(Tipomapa::find($mapa->tipo)->nombre) }}</h5>
					</div>
					<div class="col-sm-3">
						<a href="{{{url('repositoriomapas',$mapa->archivo)}}}" target="_new" title="descargar">
							{{HTML::image('img/iconos/descargargrande.png', 'imagen',['style'=>'width:40%', 'class'=>'blocky'])}}
						</a>						
					</div>			
				</div>
				<article class="float-width articl-data">
					{{$mapa->descripcion}}
				</article>
				<div class="artcl-comments float-width">
					<h3 class="sec-title">COMO USAR ESTE MAPA</h3>
					<div class="comments-section float-width">
						{{Tipomapa::find($mapa->tipo)->tutorial}}
					</div>			
				</div>
			</div>
		</div>
	</div>
	<!-- Main Right side -->
	<div class="main-right-side">
		<div class="flkr-cont lefty">
			<div class="row">				
				<div class="col-sm-4">
					{{HTML::image('img/iconos/'.Tipomapa::find($mapa->tipo)->icono.'.png', 'imagen',['style'=>'width:40%', 'class'=>'blocky'])}}
				</div>
				<div class="col-sm-4">
					@include('mapas.facebookMapa')
				</div>
			</div>			
		</div>
		
		<div class="trend-sm float-width">
			<img alt="" class="lefty" src="{{url('img/iconos/arroba.png')}}">
			<h4 class="lefty">¿Tienes alguna sugerencia o consulta sobre este mapa?</h4>
			<a class="lefty cat-a cat-label1" href="{{url('sigvial/mensaje',$mapa->id)}}">MENSAJE</a>
		</div>

		<div class="subscribe lefty">
			<h3 class="sec-title">ZONAS</h3>
			<h6>Consorcios camineros que están contenidos en este mapa.</h6>			
			<!-- Accordian -->
			<script type="text/javascript">
				jQuery( document ).ready(function() {
					$('#myTab a').click(function (e) {
						e.preventDefault()
						$(this).tab('show')
					})        

					function toggleChevron(e) {
						$(e.target)
						.prev('.panel-heading')
						.find("a.accor-arw")
						.toggleClass('arw-down arw-up');
					}
					$('#accordion').on('hidden.bs.collapse', toggleChevron);
					$('#accordion').on('shown.bs.collapse', toggleChevron);
				});
			</script>
			<div class="panel-group" id="accordion">
				@if(isset($consorciosZona1))
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="panel-title">
							<a href="#">ZONA 1</a>
							<a class="accor-arw arw-up righty"></a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								@foreach ($consorciosZona1 as $consorcio)
								<li>
									<a href="{{url('/sigvial/consorcio',$consorcio->numero)}}">
										CC {{$consorcio->numero}} {{$consorcio->nombre}}
									</a>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				@endif
				@if(isset($consorciosZona2))
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="panel-title">
							<a href="#">ZONA 2</a>
							<a class="accor-arw arw-up righty"></a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="panel-body">
							@foreach ($consorciosZona2 as $consorcio)
							<li>
								<a href="{{url('/sigvial/consorcio',$consorcio->numero)}}">
									CC {{$consorcio->numero}} {{$consorcio->nombre}}
								</a>
							</li>
							@endforeach
						</div>
					</div>
				</div>
				@endif
				@if(isset($consorciosZona3))
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4  data-toggle="collapse" data-parent="#accordion" href="#collapseTrhee" class="panel-title">
							<a href="#">ZONA 3</a>
							<a class="accor-arw arw-up righty"></a>
						</h4>
					</div>
					<div id="collapseTrhee" class="panel-collapse collapse">
						<div class="panel-body">
							@foreach ($consorciosZona3 as $consorcio)
							<li>
								<a href="{{url('/sigvial/consorcio',$consorcio->numero)}}">
									CC {{$consorcio->numero}} {{$consorcio->nombre}}
								</a>
							</li>
							@endforeach
						</div>
					</div>
				</div>
				@endif
				@if(isset($consorciosZona4))
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4  data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="panel-title">
							<a href="#">ZONA 4</a>
							<a class="accor-arw arw-up righty"></a>
						</h4>
					</div>
					<div id="collapseFour" class="panel-collapse collapse">
						<div class="panel-body">
							@foreach ($consorciosZona4 as $consorcio)
							<li>
								<a href="{{url('/sigvial/consorcio',$consorcio->numero)}}">
									CC {{$consorcio->numero}} {{$consorcio->nombre}}
								</a>
							</li>
							@endforeach
						</div>
					</div>
				</div>
				@endif
				@if(isset($consorciosZona5))
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4  data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="panel-title">
							<a href="#">ZONA 5</a>
							<a class="accor-arw arw-up righty"></a>
						</h4>
					</div>
					<div id="collapseFive" class="panel-collapse collapse">
						<div class="panel-body">
							@foreach ($consorciosZona5 as $consorcio)
							<li>
								<a href="{{url('/sigvial/consorcio',$consorcio->numero)}}">
									CC {{$consorcio->numero}} {{$consorcio->nombre}}
								</a>
							</li>
							@endforeach
						</div>
					</div>
				</div>
				@endif
			</div>
		</div>	

		<h3 class="sec-title">CONSORCIOS</h3>
		<h4>Departamentos que contiene este mapa</h4>
		@foreach ($consorcioxmapas as $consorcioxmapa)		
		<li>
			<a href="{{url('sigvial/consorcio',$consorcioxmapa->consorcio)}}">
				{{{ Consorcio::find($consorcioxmapa->consorcio)->nombre }}}
			</a>			
		</li>
		@endforeach
		<br>
		<h3 class="sec-title">DEPARTAMENTOS</h3>
		<h4>Deparatamentos" por "consorcios"</h4>
		@foreach ($deptoxmapas as $deptoxmapa)
		<li>{{{ Departamento::find($deptoxmapa->departamento)->nombre }}}</li>
		@endforeach
		
	</div>
</div>
@stop