@extends('sigvial.master')
@section('title','La Historia de SIGVIAl')
@section('content')

@if ($historia->count())
<div class="container">
	<div class="row float-width sec-cont3">			
     <div class="right-elements" align="center">
      <div class="flex-container">
         <div class="flexslider hm-slider">
            <ul class="slides">
               @foreach ($historia as $historium)
               <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
                  <img alt="" src="{{url('imghistoria',$historium->foto)}}" draggable="false">
                  <?php 
                  $fechaHistoria = new DateTime($historium->fecha);
                  ?>
                  <h3 class="cat-label cat-label5">{{ $historium->titulo }} - {{$fechaHistoria->format('d/m/Y')}}</h3>
                  <div class="hm-sldr-caption">
                     <h3><a href="#">{{ $historium->titulo }}</a></h3>
                     <p>{{ $historium->descripcion }}</p>
                  </div>
               </li>
               @endforeach
            </ul>
            <ul class="flex-direction-nav"><li><a class="flex-prev" href="#"></a></li><li><a class="flex-next" href="#"></a></li></ul></div>
         </div>
      </div>
   </div>
</div>
@else
Todavía no hay mucho que contar
@endif

<iframe width="100%" height="850" scrolling="no" frameborder="0" src="{{url('sigvial/mapasPublico')}}" target="_top"> </iframe> 

@stop