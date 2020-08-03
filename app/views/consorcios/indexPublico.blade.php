@extends('sigvial.master')
@section('title','Consorcios Camineros')
@section('main')


<div class="container">
	<div class="col-lg-8 main-search-bar">
		{{Form::open(array('url' => 'sigvial/consorcioscamineros', 'method' => 'POST'))}}
		<div class="row">
			<div class="col-sm-10">
				{{Form::text('busqueda', null, ['class' => 'form-control float-width', 'placeholder'=>'Consorcio caminero'])}}
			</div>
			<div class="col-sm-2">
				{{Form::submit('Buscar', array('class' => 'name'))}}
			</div>
		</div>
		{{Form::close()}}
	</div>
</div>

<br>

<table class="table" id="example1">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Zona</th>
			<th>Departamento</th>
			<th>Presidente</th>
			<th>Secretario</th>
			<th>Tesosrero</th>
			<th>Secretario Adjunto</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($consorcios as $consorcio)
		<tr>
			<td>
				<a href="{{url('sigvial/consorcio',$consorcio->numero)}}">
					{{{ $consorcio->numero }}}
				</a>
			</td>
			<td>
				<a href="{{url('sigvial/consorcio',$consorcio->numero)}}">
					{{{ $consorcio->nombre }}}
				</a>
			</td>
			<td>
				<a href="{{url('sigvial/consorcio',$consorcio->numero)}}">Zona {{{ $consorcio->zona }}}
				</a>
			</td>
			<td>
				<a href="{{url('sigvial/consorcio',$consorcio->numero)}}">Dpto {{{ Departamento::find($consorcio->departamento)->nombre }}}
				</a>
			</td>		
			<td>
				<a href="{{url('sigvial/consorcio',$consorcio->numero)}}">
					@if($consorcio->presidente != null)
					{{{ $consorcio->presidente }}}
					@else
					-
					@endif
				</a>
			</td>
			<td>
				<a href="{{url('sigvial/consorcio',$consorcio->numero)}}">
					@if($consorcio->secretario != null)
					{{{ $consorcio->secretario }}}
					@else
					-
					@endif
				</a>
			</td>
			<td>
				<a href="{{url('sigvial/consorcio',$consorcio->numero)}}">
					@if($consorcio->tesorero != null)
					{{{ $consorcio->tesorero }}}
					@else
					-
					@endif
				</a>
			</td>
			<td>
				<a href="{{url('sigvial/consorcio',$consorcio->numero)}}">
					@if($consorcio->secretarioadjunto != null)
					{{{ $consorcio->secretarioadjunto }}}
					@else
					-
					@endif
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{{$consorcios->links()}}
@stop
