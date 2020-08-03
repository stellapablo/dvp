@extends('layouts.scaffold')
@section('title','CC Nº'.$consorcio->numero.': '.$consorcio->nombre)
@section('main')

<h4><strong>Presidente: </strong> {{ $consorcio->presidente }}</h4>
<h4><strong>Secretario: </strong> {{ $consorcio->secretario }}</h4>
<h4><strong>Secretario Adjunto: </strong> {{ $consorcio->secretarioadjunto }}</h4>
<h4><strong>Tesorero: </strong> {{ $consorcio->tesorero }}</h4>
<h4><strong>Zona: </strong> {{ $consorcio->zona }}</h4>
<h4><strong>Departamento: </strong> {{ Departamento::find($consorcio->departamento)->nombre }}</h4>
<br>
<div class="form-row">
	<div class="form-input col-md-10">
		<div class="row">
			<div class="form-input col-md-2">
			<a href="{{url('consorcios/'.$consorcio->id.'/edit')}}" class="btn medium bg-blue" title="">
					<span class="button-content">Editar</span>
				</a>
			</div>			
			{{ Form::open(array('method' => 'DELETE', 'route' => array('consorcios.destroy', $consorcio->id))) }}
			{{ Form::submit('Eliminar', array('class' => 'col-md-1 btn medium bg-yellow')) }}
			{{ Form::close() }}

		</div>
	</div>
</div>

</table>

@stop
