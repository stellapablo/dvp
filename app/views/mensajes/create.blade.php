@extends('sigvial.master')
@section('title',$mapaMensaje->nombre)
@section('main')

<div class="contact-form float-width">
    <h3 class="sec-title">Mensaje al administrador sobre {{$mapaMensaje->nombre}}</h3>
    @if (Session::has('message'))    
    <h1>{{ Session::get('message') }}</h1>
    @endif    

    {{ Form::open(array('url' => 'sigvial/mensaje/'.$mapaMensaje->id, 'method' => 'POST'))}}
    
    {{Form::hidden('mapa', $mapaMensaje->id)}}

    <div class="form-group">
        <div class="row">
            <div class="col-sm-4">
                {{ Form::text('dni', null, ['class'=>'form-control', 'placeholder'=>'DNI']) }}
            </div>
            <div class="col-sm-4">
                {{ Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre']) }}
            </div>
            <div class="col-sm-4">
                {{ Form::text('apellido',null,['class'=>'form-control', 'placeholder'=>'Apellido']) }}
            </div>
        </div>
    </div>
    <div class="form-group">
        {{ Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'correo electrónico']) }}
    </div>

    <div class="form-group">
     {{ Form::textarea('mensaje', null, ['class'=>'form-control', 'placeholder'=>'escriba aquí su mensaje']) }}
 </div>

 <div class="form-group" align="center">
    {{ Form::submit('Enviar', array('class' => 'cmnt-btn trans2')) }}
</div>

{{ Form::close() }}

@if ($errors->any())
<ul>
  {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

</div>

@stop


