@extends('sigvial.master')
@section('title','Consorcios Camineros')
@section('content')

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

<div class="container">
	<h1>Consorcio caminero Nº{{$consorcio->numero}} : {{$consorcio->nombre}}</h1>
	<div class="row float-width sec-cont3">
		<div class="row">
			<div class="col-sm-4">				
				<div class="lists-elements float-width">
					<h3 class="sec-title">Mapas</h3>
					<p>listado de mapas que contienen a este consorcio</p>
					<ol class="magalla-ol left">					
						@foreach($mapas as $mapa)
						<li>
							<a href="{{url('/sigvial/mapadigital',$mapa->id)}}">
								{{HTML::image('img/iconos/'.Tipomapa::find(Mapa::find($mapa->mapa)->tipo)->icono.'.png', 'imagen',['style'=>'width:30px'])}}
								{{Mapa::find($mapa->mapa)->nombre}}
							</a>
						</li> 
						@endforeach
					</ol>
				</div>					
			</div>
			<div class="col-sm-8">				
				<div class="tabs-elements float-width">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs magalla-tabz-ul">
						<li class="active"><a href="#tab1" data-toggle="tab">Ubicación</a></li>
						<li><a href="#tab2" data-toggle="tab">Autoridades</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content magalla-tabz-cont">
						<div class="tab-pane fade in active" id="tab1">
							@if(isset($consorcio))
							<p>
								<h3><strong>ZONA Nº</strong> {{$consorcio->zona}}</h3>
								<h3><strong>DEPARTAMENTO: </strong> {{Departamento::find($consorcio->departamento)->nombre}}</h3>
							</p>
							@endif
						</div>
						<div class="tab-pane fade" id="tab2">
							<p>
								@if(isset($consorcio))
								<ul>
									@if($consorcio->presidente != null)
									<li>
										<h3><strong>Presidente: </strong> <br> {{$consorcio->presidente}}</h3>
									</li>
									@endif
									@if($consorcio->secretario != null)
									<li>
										<h3><strong>Secretario: </strong> <br> {{$consorcio->secretario}}</h3>
									</li>
									@endif
									@if($consorcio->secretarioadjunto != null)
									<li>
										<h3><strong>Secretario Adjunto: </strong> <br> {{$consorcio->secretarioadjunto}}</h3>
									</li>
									@endif
									@if($consorcio->tesorero != null)
									<li>
										<h3><strong>Tesosrero: </strong> <br> {{$consorcio->tesorero}}</h3>
									</li>
									@endif
								</ul>						
								@endif
							</p>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>
	<div class="row float-width sec-cont3">
		<h3 class="sec-title">CONSORCIOS CAMINEROS POR ZONA</h3>
		<div class="row">
			<div class="col-sm-3">
				<div class="panel-group" id="accordion">
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
				</div>
			</div>
			<div class="col-sm-9">
				<iframe width="100%" height="450" scrolling="no" frameborder="0" src="{{url('mapainteractivos/index.html')}}" target="_top"> </iframe>
			</div>
		</div>
	</div>
</div>

@stop