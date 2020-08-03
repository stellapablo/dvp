@extends('sigvial.master')
@section('title','La Historia de SIGVIAl')
@section('content')

<div align="center">
	<iframe width="1000" height="500" scrolling="no" frameborder="0" src="{{url('sigvial/graficaPublica',$id)}}" target="_top"> </iframe> 
</div>

@stop